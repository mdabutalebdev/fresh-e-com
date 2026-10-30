<!-- Mobile Sidebar Overlay -->
<div x-show="sidebarOpen" style="display: none;" class="fixed inset-0 z-40 bg-gray-900/80 lg:hidden" @click="sidebarOpen = false" x-transition.opacity></div>

<!-- Sidebar -->
<div :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" 
     class="fixed inset-y-0 left-0 z-50 w-64 shrink-0 bg-gray-900 text-gray-300 transition-transform duration-300 ease-in-out lg:static lg:translate-x-0 flex flex-col">
    <div class="h-16 flex items-center px-6 border-b border-gray-800">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 text-white font-semibold text-lg">
            <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="h-8 w-auto rounded">
        </a>
    </div>

    <nav class="flex-1 px-3 py-6 space-y-1">
        <a href="{{ route('admin.banners.index') }}"
           class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium transition {{ request()->routeIs('admin.banners.*') ? 'bg-gray-800 text-white' : 'hover:bg-gray-800 hover:text-white' }}">
            <i class="fa-solid fa-panorama w-5 text-center"></i>
            <span>Banners</span>
        </a>

        <a href="{{ route('admin.product-showcases.index') }}"
           class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium transition {{ request()->routeIs('admin.product-showcases.*') ? 'bg-gray-800 text-white' : 'hover:bg-gray-800 hover:text-white' }}">
            <i class="fa-solid fa-list-check w-5 text-center"></i>
            <span>Product List</span>
        </a>

        <a href="{{ route('admin.about-section.edit') }}"
           class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium transition {{ request()->routeIs('admin.about-section.*') ? 'bg-gray-800 text-white' : 'hover:bg-gray-800 hover:text-white' }}">
            <i class="fa-solid fa-circle-info w-5 text-center"></i>
            <span>About Company</span>
        </a>

        <a href="{{ route('admin.social-links.index') }}"
           class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium transition {{ request()->routeIs('admin.social-links.*') ? 'bg-gray-800 text-white' : 'hover:bg-gray-800 hover:text-white' }}">
            <i class="fa-solid fa-hashtag w-5 text-center"></i>
            <span>Social Links</span>
        </a>
    </nav>

    <div class="px-3 py-4 border-t border-gray-800">
        <a href="{{ route('home') }}" class="flex items-center gap-3 px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-800 hover:text-white transition">
            <i class="fa-solid fa-arrow-left w-5 text-center"></i>
            <span>Back to store</span>
        </a>
    </div>
</div>
