<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Banners') }}</h2>
            <a href="{{ route('admin.banners.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-md hover:bg-primary-700">
                <i class="fa-solid fa-plus"></i> New Banner
            </a>
        </div>
    </x-slot>

    @if (session('status'))
        <div class="mb-4 rounded-md bg-emerald-50 text-emerald-700 px-4 py-3 text-sm">
            {{ session('status') }}
        </div>
    @endif

    <div class="bg-white shadow-sm rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Preview</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Type</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Order</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($banners as $banner)
                    <tr>
                        <td class="px-6 py-4">
                            <div class="h-14 w-24 bg-gray-100 rounded overflow-hidden flex items-center justify-center">
                                @if ($banner->isVideo())
                                    <video src="{{ asset('storage/' . $banner->media) }}" class="h-full w-full object-cover" muted></video>
                                @else
                                    <img src="{{ asset('storage/' . $banner->media) }}" alt="{{ $banner->title }}" class="h-full w-full object-cover">
                                @endif
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $banner->title ?: '—' }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            <i class="fa-solid {{ $banner->isVideo() ? 'fa-video' : 'fa-image' }} me-1"></i>
                            {{ ucfirst($banner->media_type) }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $banner->sort_order }}</td>
                        <td class="px-6 py-4 text-sm">
                            @if ($banner->is_active)
                                <span class="inline-flex px-2 py-1 text-xs rounded-full bg-emerald-100 text-emerald-700">Active</span>
                            @else
                                <span class="inline-flex px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-600">Inactive</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right text-sm">
                            <a href="{{ route('admin.banners.edit', $banner) }}" class="text-primary-600 hover:text-primary-900 me-3">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form action="{{ route('admin.banners.destroy', $banner) }}" method="POST" class="inline" onsubmit="return confirm('Delete this banner?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-8 text-center text-sm text-gray-500">No banners yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $banners->links() }}
    </div>
</x-admin-layout>
