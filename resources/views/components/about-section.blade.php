@props(['about'])

<section id="about" class="bg-white py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <span class="block text-primary-600 font-bold text-sm uppercase tracking-wider mb-4">
                    About Company
                </span>

                @if ($about->title)
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 leading-tight mb-6">{{ $about->title }}</h2>
                @endif

                @if ($about->paragraph_one)
                    <p class="text-gray-600 leading-relaxed mb-5">{{ $about->paragraph_one }}</p>
                @endif

                @if ($about->paragraph_two)
                    <p class="text-gray-600 leading-relaxed mb-8">{{ $about->paragraph_two }}</p>
                @endif

                @if ($about->button_text)
                    <a href="{{ $about->button_url ?: '#' }}"
                       class="inline-flex items-center gap-2 px-7 py-3.5 bg-primary-600 text-white font-semibold rounded-md shadow-md hover:bg-primary-700 hover:shadow-lg transition">
                        {{ $about->button_text }}
                    </a>
                @endif
            </div>

            <div>
                @if ($about->image)
                    <img src="{{ asset('storage/' . $about->image) }}" alt="{{ $about->title }}"
                         class="w-full aspect-[4/3] object-cover rounded-2xl shadow-xl">
                @else
                    <div class="aspect-[4/3] bg-gray-100 rounded-2xl shadow-xl flex items-center justify-center">
                        <i class="fa-solid fa-image text-4xl text-gray-300"></i>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
