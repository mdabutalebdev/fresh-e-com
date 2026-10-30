<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Social Links') }}</h2>
            <a href="{{ route('admin.social-links.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-md hover:bg-primary-700">
                <i class="fa-solid fa-plus"></i> Add Link
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Platform</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Icon</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">URL</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($socialLinks as $link)
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-gray-800">{{ $link->platform }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            @if($link->icon)
                                <i class="{{ $link->icon }} text-xl me-2"></i> {{ $link->icon }}
                            @else
                                —
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            <a href="{{ $link->url }}" target="_blank" class="text-primary-600 hover:underline">Link <i class="fa-solid fa-arrow-up-right-from-square text-xs ms-1"></i></a>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            @if ($link->is_active)
                                <span class="inline-flex px-2 py-1 text-xs rounded-full bg-emerald-100 text-emerald-700">Active</span>
                            @else
                                <span class="inline-flex px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-600">Inactive</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right text-sm">
                            <a href="{{ route('admin.social-links.edit', $link) }}" class="text-primary-600 hover:text-primary-900 me-3">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form action="{{ route('admin.social-links.destroy', $link) }}" method="POST" class="inline" onsubmit="return confirm('Delete this social link?');">
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
                        <td colspan="5" class="px-6 py-8 text-center text-sm text-gray-500">No social links yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-admin-layout>
