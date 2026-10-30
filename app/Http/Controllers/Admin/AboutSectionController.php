<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutSectionController extends Controller
{
    public function edit()
    {
        $about = AboutSection::first() ?? new AboutSection();

        return view('admin.about-section.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => ['nullable', 'string', 'max:255'],
            'paragraph_one' => ['nullable', 'string'],
            'paragraph_two' => ['nullable', 'string'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_url' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'file', 'image', 'max:5120'],
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        $about = AboutSection::first() ?? new AboutSection();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('about-section', 'public');

            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }
        }

        if ($about->exists) {
            $about->update($validated);
        } else {
            AboutSection::create($validated);
        }

        return redirect()->route('admin.about-section.edit')->with('status', 'About section updated.');
    }
}
