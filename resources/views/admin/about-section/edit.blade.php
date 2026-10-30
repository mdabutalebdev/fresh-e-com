<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('About Company') }}</h2>
    </x-slot>

    @if (session('status'))
        <div class="mb-4 rounded-md bg-emerald-50 text-emerald-700 px-4 py-3 text-sm">
            {{ session('status') }}
        </div>
    @endif

    <div class="bg-white shadow-sm rounded-lg p-6 max-w-2xl">
        <form action="{{ route('admin.about-section.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="title" value="Title (optional)" />
                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" value="{{ old('title', $about->title) }}" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="paragraph_one" value="Paragraph 1 (optional)" />
                <textarea id="paragraph_one" name="paragraph_one" rows="3" class="mt-1 block w-full border-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-md shadow-sm">{{ old('paragraph_one', $about->paragraph_one) }}</textarea>
                <x-input-error :messages="$errors->get('paragraph_one')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="paragraph_two" value="Paragraph 2 (optional)" />
                <textarea id="paragraph_two" name="paragraph_two" rows="3" class="mt-1 block w-full border-gray-300 focus:border-primary-500 focus:ring-primary-500 rounded-md shadow-sm">{{ old('paragraph_two', $about->paragraph_two) }}</textarea>
                <x-input-error :messages="$errors->get('paragraph_two')" class="mt-2" />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <x-input-label for="button_text" value="Button text (optional)" />
                    <x-text-input id="button_text" name="button_text" type="text" class="mt-1 block w-full" value="{{ old('button_text', $about->button_text) }}" />
                    <x-input-error :messages="$errors->get('button_text')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="button_url" value="Button link (optional)" />
                    <x-text-input id="button_url" name="button_url" type="text" class="mt-1 block w-full" value="{{ old('button_url', $about->button_url) }}" placeholder="https://..." />
                    <x-input-error :messages="$errors->get('button_url')" class="mt-2" />
                </div>
            </div>

            <div>
                <x-input-label for="image" value="Image (optional)" />

                @if ($about->image)
                    <div class="mt-2 mb-3 h-32 w-48 bg-gray-100 rounded overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('storage/' . $about->image) }}" alt="{{ $about->title }}" class="h-full w-full object-cover">
                    </div>
                @endif

                <input id="image" name="image" type="file" accept="image/png,image/jpeg,image/gif,image/webp"
                       class="mt-1 block w-full text-sm text-gray-600 file:me-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100" />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>

            <div class="flex items-center gap-2">
                <input type="checkbox" id="is_active" name="is_active" value="1" @checked(old('is_active', $about->is_active ?? true)) class="rounded border-gray-300 text-primary-600 focus:ring-primary-500">
                <label for="is_active" class="text-sm text-gray-700">Show this section on the homepage</label>
            </div>

            <div class="flex justify-end gap-3">
                <button type="submit" class="px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-md hover:bg-primary-700">
                    <i class="fa-solid fa-check"></i> Save
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
