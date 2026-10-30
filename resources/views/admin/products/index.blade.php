<x-admin-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Products') }}</h2>
            <a href="{{ route('admin.products.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-md hover:bg-primary-700">
                <i class="fa-solid fa-plus"></i> New Product
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Category</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Price</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Stock</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($products as $product)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800">
                            <i class="fa-solid fa-box text-primary-500 me-2"></i>{{ $product->name }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $product->category->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">
                            @if ($product->sale_price)
                                <span class="line-through text-gray-400">${{ number_format($product->price, 2) }}</span>
                                <span class="text-emerald-600 font-medium">${{ number_format($product->sale_price, 2) }}</span>
                            @else
                                ${{ number_format($product->price, 2) }}
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $product->stock }}</td>
                        <td class="px-6 py-4 text-sm">
                            @if ($product->is_active)
                                <span class="inline-flex px-2 py-1 text-xs rounded-full bg-emerald-100 text-emerald-700">Active</span>
                            @else
                                <span class="inline-flex px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-600">Inactive</span>
                            @endif
                            @if ($product->is_featured)
                                <span class="inline-flex px-2 py-1 text-xs rounded-full bg-amber-100 text-amber-700"><i class="fa-solid fa-star"></i></span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right text-sm">
                            <a href="{{ route('admin.products.edit', $product) }}" class="text-primary-600 hover:text-primary-900 me-3">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline" onsubmit="return confirm('Delete this product?');">
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
                        <td colspan="6" class="px-6 py-8 text-center text-sm text-gray-500">No products yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $products->links() }}
    </div>
</x-admin-layout>
