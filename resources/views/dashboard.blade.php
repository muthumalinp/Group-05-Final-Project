<x-app-layout>
    <x-slot name="header">
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo or site name can go here -->

                    <div class="flex items-center">
                        <!-- Links to different sections or pages -->
                        <div class="hidden md:block">
                            <a href="#" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                            <a href="#" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">About</a>
                            <a href="#" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Services</a>
                            <a href="#" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                        </div>
                    </div>

                    <!-- Authentication Links -->
                    <div class="hidden md:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-white hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Register</a>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

