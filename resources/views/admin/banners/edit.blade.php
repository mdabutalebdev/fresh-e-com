<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Edit Banner') }}</h2>
    </x-slot>

    <div class="bg-white shadow-sm rounded-lg p-6 max-w-2xl">
        <form action="{{ route('admin.banners.update', $banner) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')
            @include('admin.banners.partials.form')

            <div class="flex justify-end gap-3">
                <a href="{{ route('admin.banners.index') }}" class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-800">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-md hover:bg-primary-700">
                    <i class="fa-solid fa-check"></i> Update
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
