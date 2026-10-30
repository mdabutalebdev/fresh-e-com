<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Edit Social Link') }}</h2>
            <a href="{{ route('admin.social-links.index') }}" class="text-gray-500 hover:text-gray-700">
                <i class="fa-solid fa-arrow-left me-1"></i> Back
            </a>
        </div>
    </x-slot>

    <div class="bg-white shadow-sm rounded-lg overflow-hidden">
        <form action="{{ route('admin.social-links.update', $socialLink) }}" method="POST" class="p-6">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="platform" class="block text-sm font-medium text-gray-700 mb-1">Platform Name</label>
                    <input type="text" name="platform" id="platform" class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500" value="{{ old('platform', $socialLink->platform) }}" required>
                    @error('platform')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="url" class="block text-sm font-medium text-gray-700 mb-1">URL</label>
                    <input type="url" name="url" id="url" class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500" value="{{ old('url', $socialLink->url) }}" required>
                    @error('url')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="icon" class="block text-sm font-medium text-gray-700 mb-1">Icon Class (FontAwesome)</label>
                    <input type="text" name="icon" id="icon" class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500" value="{{ old('icon', $socialLink->icon) }}">
                    <p class="text-gray-500 text-xs mt-1">Leave blank if no icon.</p>
                    @error('icon')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-1">Sort Order</label>
                    <input type="number" name="sort_order" id="sort_order" class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500" value="{{ old('sort_order', $socialLink->sort_order) }}" min="0">
                    @error('sort_order')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="md:col-span-2">
                    <div class="flex items-center mt-2">
                        <input type="checkbox" name="is_active" id="is_active" value="1" class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50" {{ old('is_active', $socialLink->is_active) ? 'checked' : '' }}>
                        <label for="is_active" class="ms-2 block text-sm text-gray-900">
                            Active (Show in footer)
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex justify-end pt-4 border-t border-gray-100">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700 transition">
                    Update Social Link
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
