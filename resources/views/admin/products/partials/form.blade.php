@php $product = $product ?? null; @endphp

<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    <div class="sm:col-span-2">
        <x-input-label for="name" value="Name" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ old('name', $product?->name) }}" required autofocus />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="category_id" value="Category" />
        <select id="category_id" name="category_id" class="mt-1 block w-full border-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-md shadow-sm" required>
            <option value="">Select a category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected(old('category_id', $product?->category_id) == $category->id)>{{ $category->name }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="sku" value="SKU" />
        <x-text-input id="sku" name="sku" type="text" class="mt-1 block w-full" value="{{ old('sku', $product?->sku) }}" />
        <x-input-error :messages="$errors->get('sku')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="price" value="Price" />
        <x-text-input id="price" name="price" type="number" step="0.01" min="0" class="mt-1 block w-full" value="{{ old('price', $product?->price) }}" required />
        <x-input-error :messages="$errors->get('price')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="sale_price" value="Sale price" />
        <x-text-input id="sale_price" name="sale_price" type="number" step="0.01" min="0" class="mt-1 block w-full" value="{{ old('sale_price', $product?->sale_price) }}" />
        <x-input-error :messages="$errors->get('sale_price')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="stock" value="Stock" />
        <x-text-input id="stock" name="stock" type="number" min="0" class="mt-1 block w-full" value="{{ old('stock', $product?->stock ?? 0) }}" required />
        <x-input-error :messages="$errors->get('stock')" class="mt-2" />
    </div>

    <div class="sm:col-span-2">
        <x-input-label for="description" value="Description" />
        <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-md shadow-sm">{{ old('description', $product?->description) }}</textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>

    <div class="flex items-center gap-2">
        <input type="checkbox" id="is_active" name="is_active" value="1" @checked(old('is_active', $product?->is_active ?? true)) class="rounded border-gray-300 text-primary-600 focus:ring-primary-500">
        <label for="is_active" class="text-sm text-gray-700">Active</label>
    </div>

    <div class="flex items-center gap-2">
        <input type="checkbox" id="is_featured" name="is_featured" value="1" @checked(old('is_featured', $product?->is_featured ?? false)) class="rounded border-gray-300 text-primary-600 focus:ring-primary-500">
        <label for="is_featured" class="text-sm text-gray-700">Featured</label>
    </div>
</div>
