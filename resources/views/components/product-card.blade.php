@props(['product'])

<div class="bg-white rounded-lg shadow-sm hover:shadow-md transition overflow-hidden group">
    <div class="aspect-square bg-gray-100 flex items-center justify-center relative overflow-hidden">
        @if ($product->thumbnail)
            <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="{{ $product->name }}" class="object-cover w-full h-full group-hover:scale-105 transition">
        @else
            <i class="fa-solid fa-image text-4xl text-gray-300"></i>
        @endif

        @if ($product->sale_price)
            <span class="absolute top-2 left-2 bg-red-500 text-white text-xs font-medium px-2 py-1 rounded">Sale</span>
        @endif
    </div>

    <div class="p-4">
        <div class="text-xs text-gray-400 uppercase tracking-wide mb-1">{{ $product->category->name }}</div>
        <h3 class="font-medium text-gray-800 mb-2 truncate">{{ $product->name }}</h3>

        <div class="flex items-center gap-2">
            @if ($product->sale_price)
                <span class="text-gray-400 line-through text-sm">${{ number_format($product->price, 2) }}</span>
                <span class="text-primary-600 font-semibold">${{ number_format($product->sale_price, 2) }}</span>
            @else
                <span class="text-primary-600 font-semibold">${{ number_format($product->price, 2) }}</span>
            @endif
        </div>
    </div>
</div>
