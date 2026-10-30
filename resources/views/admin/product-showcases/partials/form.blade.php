@php $item = $item ?? null; @endphp

<div>
    <x-input-label for="image" value="Image" />

    @if ($item?->image)
        <div class="mt-2 mb-3 h-32 w-32 bg-gray-100 rounded overflow-hidden flex items-center justify-center">
            <img src="{{ asset('storage/' . $item->image) }}" alt="Product image" class="h-full w-full object-contain">
        </div>
    @endif

    <input id="image" name="image" type="file" accept="image/png,image/jpeg,image/gif,image/webp"
           class="mt-1 block w-full text-sm text-gray-600 file:me-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100" />
    <x-input-error :messages="$errors->get('image')" class="mt-2" />
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    <div>
        <x-input-label for="sort_order" value="Sort order" />
        <x-text-input id="sort_order" name="sort_order" type="number" min="0" class="mt-1 block w-full" value="{{ old('sort_order', $item?->sort_order ?? 0) }}" />
        <x-input-error :messages="$errors->get('sort_order')" class="mt-2" />
    </div>

    <div class="flex items-center gap-2 mt-6">
        <input type="checkbox" id="is_active" name="is_active" value="1" @checked(old('is_active', $item?->is_active ?? true)) class="rounded border-gray-300 text-primary-600 focus:ring-primary-500">
        <label for="is_active" class="text-sm text-gray-700">Active</label>
    </div>
</div>
