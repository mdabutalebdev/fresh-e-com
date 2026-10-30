<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductShowcase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductShowcaseController extends Controller
{
    public function index()
    {
        $items = ProductShowcase::orderBy('sort_order')->latest()->paginate(15);

        return view('admin.product-showcases.index', compact('items'));
    }

    public function create()
    {
        return view('admin.product-showcases.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validateItem($request);
        $validated['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('product-showcases', 'public');
        }

        ProductShowcase::create($validated);

        return redirect()->route('admin.product-showcases.index')->with('status', 'Item created.');
    }

    public function edit(ProductShowcase $productShowcase)
    {
        return view('admin.product-showcases.edit', ['item' => $productShowcase]);
    }

    public function update(Request $request, ProductShowcase $productShowcase)
    {
        $validated = $this->validateItem($request);
        $validated['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('product-showcases', 'public');

            if ($productShowcase->image) {
                Storage::disk('public')->delete($productShowcase->image);
            }
        }

        $productShowcase->update($validated);

        return redirect()->route('admin.product-showcases.index')->with('status', 'Item updated.');
    }

    public function destroy(ProductShowcase $productShowcase)
    {
        if ($productShowcase->image) {
            Storage::disk('public')->delete($productShowcase->image);
        }

        $productShowcase->delete();

        return redirect()->route('admin.product-showcases.index')->with('status', 'Item deleted.');
    }

    private function validateItem(Request $request): array
    {
        return $request->validate([
            'image' => ['nullable', 'file', 'image', 'max:5120'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);
    }
}
