<footer class="bg-gray-900 text-gray-400 mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <div>
            <div class="flex items-center gap-2 mb-3">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="h-12 w-auto rounded bg-white">
            </div>
            @php
                $footerAbout = \App\Models\AboutSection::where('is_active', true)->first();
            @endphp
            <p class="text-sm">
                {{ $footerAbout ? \Illuminate\Support\Str::limit($footerAbout->paragraph_one, 120) : 'Quality products, delivered fast.' }}
            </p>
        </div>

        <div>
            <h3 class="text-white font-medium mb-3">Shop</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                <li><a href="{{ route('product') }}" class="hover:text-white">All Products</a></li>
                <li><a href="{{ route('our-owner') }}" class="hover:text-white">Our Owner</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-white font-medium mb-3">Support</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('about-us') }}" class="hover:text-white">About Us</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white">Contact Us</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-white font-medium mb-3">Follow Us</h3>
            <div class="flex flex-wrap gap-4 text-lg">
                @php
                    $socialLinks = \App\Models\SocialLink::where('is_active', true)->orderBy('sort_order')->get();
                @endphp
                @forelse($socialLinks as $link)
                    <a href="{{ $link->url }}" target="_blank" class="hover:text-white" title="{{ $link->platform }}">
                        @if($link->icon)
                            <i class="{{ $link->icon }}"></i>
                        @else
                            {{ $link->platform }}
                        @endif
                    </a>
                @empty
                    <span class="text-sm">No social links yet.</span>
                @endforelse
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="border-t border-gray-800 py-6 flex justify-between items-center text-xs">
            <div class="text-left">
                &copy; {{ date('Y') }} Fresh E-Commerce. All rights reserved.
            </div>
            <div class="text-right">
                Created by <a href="https://www.extrainweb.com/" target="_blank" class="text-white font-medium hover:underline">Extrain Web</a>
            </div>
        </div>
    </div>
</footer>
