<x-storefront-layout>
    <!-- Hero -->
    @if ($banners->isNotEmpty())
        <x-banner-slider :banners="$banners" />
    @else
        <section class="bg-primary-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
                <h1 class="text-3xl sm:text-4xl font-bold text-white mb-4">Everything you need, in one place</h1>
                <p class="text-primary-100 max-w-xl mx-auto mb-8">Discover quality products across every category, at prices you'll love.</p>
                <a href="#featured" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-primary-700 font-medium rounded-md hover:bg-primary-50">
                    <i class="fa-solid fa-bag-shopping"></i> Shop Now
                </a>
            </div>
        </section>
    @endif

    <!-- About Company -->
    @if ($about)
        <x-about-section :about="$about" />
    @endif

    <!-- Our Product List -->
    <x-product-list-section :items="$showcaseItems" />
</x-storefront-layout>
