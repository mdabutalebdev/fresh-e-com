@props(['item'])

<div class="rounded-lg overflow-hidden shadow-sm bg-gray-50">
    @if ($item->image)
        <img src="{{ asset('storage/' . $item->image) }}" alt="Product" class="w-full h-auto">
    @else
        <div class="aspect-[21/9] flex items-center justify-center">
            <i class="fa-solid fa-image text-3xl text-gray-300"></i>
        </div>
    @endif
</div>
