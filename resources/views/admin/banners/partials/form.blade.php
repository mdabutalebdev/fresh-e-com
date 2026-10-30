@php $banner = $banner ?? null; @endphp

<div>
    <x-input-label for="title" value="Title (optional)" />
    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" value="{{ old('title', $banner?->title) }}" />
    <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>

<div>
    <x-input-label for="description" value="Description (optional)" />
    <textarea id="description" name="description" rows="3" class="mt-1 block w-full border-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-md shadow-sm">{{ old('description', $banner?->description) }}</textarea>
    <x-input-error :messages="$errors->get('description')" class="mt-2" />
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    <div>
        <x-input-label for="button_one_text" value="Button 1 text" />
        <x-text-input id="button_one_text" name="button_one_text" type="text" class="mt-1 block w-full" value="{{ old('button_one_text', $banner?->button_one_text) }}" />
        <x-input-error :messages="$errors->get('button_one_text')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="button_one_url" value="Button 1 link" />
        <x-text-input id="button_one_url" name="button_one_url" type="text" class="mt-1 block w-full" value="{{ old('button_one_url', $banner?->button_one_url) }}" placeholder="https://..." />
        <x-input-error :messages="$errors->get('button_one_url')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="button_two_text" value="Button 2 text" />
        <x-text-input id="button_two_text" name="button_two_text" type="text" class="mt-1 block w-full" value="{{ old('button_two_text', $banner?->button_two_text) }}" />
        <x-input-error :messages="$errors->get('button_two_text')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="button_two_url" value="Button 2 link" />
        <x-text-input id="button_two_url" name="button_two_url" type="text" class="mt-1 block w-full" value="{{ old('button_two_url', $banner?->button_two_url) }}" placeholder="https://..." />
        <x-input-error :messages="$errors->get('button_two_url')" class="mt-2" />
    </div>
</div>

<div>
    <x-input-label for="media" value="Image / GIF / Video" />

    @if ($banner?->media)
        <div class="mt-2 mb-3 h-32 w-56 bg-gray-100 rounded overflow-hidden flex items-center justify-center">
            @if ($banner->isVideo())
                <video src="{{ asset('storage/' . $banner->media) }}" class="h-full w-full object-cover" muted controls></video>
            @else
                <img src="{{ asset('storage/' . $banner->media) }}" alt="{{ $banner->title }}" class="h-full w-full object-cover">
            @endif
        </div>
    @endif

    <input id="media" name="media" type="file" accept="image/png,image/jpeg,image/gif,image/webp,video/mp4,video/webm,video/quicktime"
           class="mt-1 block w-full text-sm text-gray-600 file:me-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100" />
    <p class="mt-1 text-xs text-gray-400">JPG, PNG, GIF, WEBP, MP4, WEBM or MOV &mdash; max 20MB.</p>
    <x-input-error :messages="$errors->get('media')" class="mt-2" />
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    <div>
        <x-input-label for="sort_order" value="Sort order" />
        <x-text-input id="sort_order" name="sort_order" type="number" min="0" class="mt-1 block w-full" value="{{ old('sort_order', $banner?->sort_order ?? 0) }}" />
        <x-input-error :messages="$errors->get('sort_order')" class="mt-2" />
    </div>

    <div class="flex items-center gap-2 mt-6">
        <input type="checkbox" id="is_active" name="is_active" value="1" @checked(old('is_active', $banner?->is_active ?? true)) class="rounded border-gray-300 text-primary-600 focus:ring-primary-500">
        <label for="is_active" class="text-sm text-gray-700">Active</label>
    </div>
</div>
