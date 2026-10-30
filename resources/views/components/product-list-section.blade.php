@props(['items'])

<section id="featured" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Our Product List</h2>

    @if ($items->isEmpty())
        <div class="text-center text-gray-500 py-16">
            <i class="fa-solid fa-box-open text-4xl mb-3"></i>
            <p>No products yet &mdash; check back soon.</p>
        </div>
    @else
        <div class="space-y-6">
            @foreach ($items as $item)
                <x-showcase-card :item="$item" />
            @endforeach
        </div>
    @endif
</section>
