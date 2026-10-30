<nav class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-4 sm:px-6 lg:px-8">
    <div class="flex items-center gap-3 lg:hidden">
        <button @click="sidebarOpen = true" class="text-gray-500 hover:text-gray-700 focus:outline-none p-2 -ml-2 rounded-md">
            <i class="fa-solid fa-bars text-xl"></i>
        </button>
        <div class="flex items-center gap-2">
            <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="h-8 w-auto rounded">
        </div>
    </div>

    <div class="hidden lg:block text-sm text-gray-500">
        <i class="fa-solid fa-house-chimney"></i>
        <span class="ms-1">Admin Panel</span>
    </div>

    <div class="flex items-center gap-4">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center gap-2 px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    <i class="fa-solid fa-circle-user text-lg"></i>
                    <div>{{ Auth::user()->name }}</div>
                    <i class="fa-solid fa-chevron-down text-xs"></i>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    <i class="fa-solid fa-user-gear w-4"></i> {{ __('Profile') }}
                </x-dropdown-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="fa-solid fa-right-from-bracket w-4"></i> {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
</nav>
