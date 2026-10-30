@props(['banners'])

<div class="banner-swiper swiper relative">
    <div class="swiper-wrapper">
        @foreach ($banners as $banner)
            <div class="swiper-slide relative h-[420px] sm:h-[500px] overflow-hidden bg-gray-900">
                @if ($banner->isVideo())
                    <video src="{{ asset('storage/' . $banner->media) }}" class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline></video>
                @else
                    <img src="{{ asset('storage/' . $banner->media) }}" alt="{{ $banner->title }}" class="absolute inset-0 w-full h-full object-cover">
                @endif

                <div class="absolute inset-0 bg-black/40"></div>

                @if ($banner->title || $banner->description || $banner->button_one_text || $banner->button_two_text)
                    <div class="relative h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center text-center">
                        @if ($banner->title)
                            <h1 class="text-3xl sm:text-4xl font-bold text-white mb-4">{{ $banner->title }}</h1>
                        @endif

                        @if ($banner->description)
                            <p class="text-gray-100 max-w-xl mb-8">{{ $banner->description }}</p>
                        @endif

                        @if ($banner->button_one_text || $banner->button_two_text)
                            <div class="flex items-center gap-4">
                                @if ($banner->button_one_text)
                                    <a href="{{ $banner->button_one_url ?: '#' }}" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-primary-700 font-medium rounded-md hover:bg-primary-50">
                                        {{ $banner->button_one_text }}
                                    </a>
                                @endif

                                @if ($banner->button_two_text)
                                    <a href="{{ $banner->button_two_url ?: '#' }}" class="inline-flex items-center gap-2 px-6 py-3 border border-white text-white font-medium rounded-md hover:bg-white/10">
                                        {{ $banner->button_two_text }}
                                    </a>
                                @endif
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    @if ($banners->count() > 1)
        <div class="banner-swiper-pagination absolute bottom-4 left-0 right-0 z-10 flex justify-center gap-2"></div>

        <button class="banner-swiper-prev absolute top-1/2 left-4 -translate-y-1/2 z-10 h-10 w-10 rounded-full bg-white/20 hover:bg-white/30 text-white flex items-center justify-center">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button class="banner-swiper-next absolute top-1/2 right-4 -translate-y-1/2 z-10 h-10 w-10 rounded-full bg-white/20 hover:bg-white/30 text-white flex items-center justify-center">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    @endif
</div>
