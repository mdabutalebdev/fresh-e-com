<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
        <div class="text-gray-900 text-lg">
            {{ __("Welcome to the Admin Panel. Please use the sidebar menu to manage your content.") }}
        </div>
    </div>
</x-admin-layout>
