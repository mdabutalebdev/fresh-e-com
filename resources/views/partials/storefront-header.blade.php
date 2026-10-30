<header class="bg-white border-b border-gray-200 sticky top-0 z-10">
    <style>
        /* Fallback for uncompiled Tailwind classes */
        @media (min-width: 768px) {
            .md\:hidden { display: none !important; }
            .md\:block { display: block !important; }
            .md\:flex { display: flex !important; }
        }
    </style>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="h-10 w-auto rounded">
            </a>

            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-primary-600">Home</a>
                <a href="{{ route('product') }}" class="hover:text-primary-600">Product</a>
                <a href="{{ route('our-owner') }}" class="hover:text-primary-600">Our Owner</a>
                <a href="{{ route('about-us') }}" class="hover:text-primary-600">About Us</a>
                <a href="{{ route('contact') }}" class="hover:text-primary-600">Contact</a>
            </nav>

            <div class="flex items-center gap-5">
                <div class="hidden md:block">
                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="text-sm font-medium text-gray-600 hover:text-primary-600">
                            <i class="fa-solid fa-gauge"></i> Admin Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-primary-600">
                            <i class="fa-solid fa-lock mr-1"></i> Admin Login
                        </a>
                    @endauth
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-600 hover:text-primary-600 focus:outline-none">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="fixed inset-0 bg-black/50 hidden" style="z-index: 40; opacity: 0; transition: opacity 0.3s;"></div>

<!-- Mobile Menu Drawer (Right side) -->
<div id="mobile-menu-drawer" class="fixed top-0 right-0 w-64 bg-white shadow-2xl flex flex-col" style="height: 100vh; z-index: 50; transform: translateX(100%); transition: transform 0.3s ease-in-out;">
    <div class="flex items-center justify-between p-4 border-b">
        <span class="font-bold text-lg text-gray-800">Menu</span>
        <button id="mobile-menu-close" class="text-gray-500 hover:text-red-500 focus:outline-none p-2">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>
    </div>
    <div class="flex-1 overflow-y-auto py-4">
        <nav class="flex flex-col space-y-1 px-4 text-gray-700 font-medium">
            <a href="{{ route('home') }}" class="hover:text-primary-600 hover:bg-gray-50 px-2 rounded transition border-b border-gray-100" style="padding-top: 12px; padding-bottom: 12px;">Home</a>
            <a href="{{ route('product') }}" class="hover:text-primary-600 hover:bg-gray-50 px-2 rounded transition border-b border-gray-100" style="padding-top: 12px; padding-bottom: 12px;">Product</a>
            <a href="{{ route('our-owner') }}" class="hover:text-primary-600 hover:bg-gray-50 px-2 rounded transition border-b border-gray-100" style="padding-top: 12px; padding-bottom: 12px;">Our Owner</a>
            <a href="{{ route('about-us') }}" class="hover:text-primary-600 hover:bg-gray-50 px-2 rounded transition border-b border-gray-100" style="padding-top: 12px; padding-bottom: 12px;">About Us</a>
            <a href="{{ route('contact') }}" class="hover:text-primary-600 hover:bg-gray-50 px-2 rounded transition border-b border-gray-100" style="padding-top: 12px; padding-bottom: 12px;">Contact</a>
        </nav>
    </div>
    <div class="p-4 border-t">
        @auth
            <a href="{{ route('admin.dashboard') }}" class="flex items-center justify-center w-full bg-red-600 text-white font-medium rounded-md hover:bg-red-700 transition" style="padding: 12px 16px;">
                <i class="fa-solid fa-gauge mr-2"></i> Admin Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="flex items-center justify-center w-full bg-gray-800 text-white font-medium rounded-md hover:bg-gray-900 transition" style="padding: 12px 16px;">
                <i class="fa-solid fa-lock mr-2"></i> Admin Login
            </a>
        @endauth
    </div>
</div>

<!-- Mobile Menu Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        const mobileMenuDrawer = document.getElementById('mobile-menu-drawer');

        function openMenu() {
            mobileMenuOverlay.classList.remove('hidden');
            // Small delay to allow display block to apply before transition
            requestAnimationFrame(() => {
                mobileMenuOverlay.style.opacity = '1';
                mobileMenuDrawer.style.transform = 'translateX(0)';
            });
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            mobileMenuOverlay.style.opacity = '0';
            mobileMenuDrawer.style.transform = 'translateX(100%)';
            setTimeout(() => {
                mobileMenuOverlay.classList.add('hidden');
            }, 300); // match transition duration
            document.body.style.overflow = '';
        }

        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', openMenu);
        }
        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', closeMenu);
        }
        if (mobileMenuOverlay) {
            mobileMenuOverlay.addEventListener('click', closeMenu);
        }
    });
</script>
