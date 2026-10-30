<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    private const MEDIA_MIMES = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'mp4', 'webm', 'mov'];

    private const VIDEO_MIMES = ['mp4', 'webm', 'mov', 'quicktime'];

    public function index()
    {
        $banners = Banner::orderBy('sort_order')->latest()->paginate(15);

        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validateBanner($request, true);
        $validated['is_active'] = $request->boolean('is_active');

        $file = $request->file('media');
        $validated['media'] = $file->store('banners', 'public');
        $validated['media_type'] = $this->resolveMediaType($file);

        Banner::create($validated);

        return redirect()->route('admin.banners.index')->with('status', 'Banner created.');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $validated = $this->validateBanner($request, false);
        $validated['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $validated['media'] = $file->store('banners', 'public');
            $validated['media_type'] = $this->resolveMediaType($file);

            Storage::disk('public')->delete($banner->media);
        }

        $banner->update($validated);

        return redirect()->route('admin.banners.index')->with('status', 'Banner updated.');
    }

    public function destroy(Banner $banner)
    {
        Storage::disk('public')->delete($banner->media);
        $banner->delete();

        return redirect()->route('admin.banners.index')->with('status', 'Banner deleted.');
    }

    private function validateBanner(Request $request, bool $mediaRequired): array
    {
        return $request->validate([
            'title' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'button_one_text' => ['nullable', 'string', 'max:100'],
            'button_one_url' => ['nullable', 'string', 'max:255'],
            'button_two_text' => ['nullable', 'string', 'max:100'],
            'button_two_url' => ['nullable', 'string', 'max:255'],
            'media' => [$mediaRequired ? 'required' : 'nullable', 'file', 'mimes:'.implode(',', self::MEDIA_MIMES), 'max:20480'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);
    }

    private function resolveMediaType($file): string
    {
        return in_array(strtolower($file->getClientOriginalExtension()), self::VIDEO_MIMES, true) ? 'video' : 'image';
    }
}
