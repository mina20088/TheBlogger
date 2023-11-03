<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('home.index') }}" class="text-white text-2xl font-bold"><img
                src="{{ Vite::asset('resources/images/logo.png')  }}" width="200" height="67"></a>
        <div class="hidden md:flex space-x-4">
            <a href="{{ route('home.index') }}" class="text-2xl max-lg:text-lg text-white hover:text-blue-300">Home</a>
            <a href="#" class="text-2xl max-lg:text-lg text-white hover:text-blue-300">About</a>
            <a href="#" class="text-2xl max-lg:text-lg text-white hover:text-blue-300">Services</a>
            <a href="#" class="text-2xl max-lg:text-lg  text-white hover:text-blue-300">Contact</a>
        </div>
        <div class="hidden md:flex space-x-4">
            @guest()
                <a href="{{ route('login.create') }}"
                   class="bg-white text-blue-500 hover:bg-blue-100 px-4 py-2 rounded-md">Login</a>
                <a href="{{ route('register.create') }}"
                   class="bg-white text-blue-500 hover:bg-blue-100 px-4 py-2 rounded-md">Register</a>
            @endguest

            @auth()
                    <!--user avatar-menus-button-->
                    <x-dashboard.dashboard-user-avatar-button class="text-white"/>
                    <!-- Dropdown menu -->
                    <x-dashboard.dashboard-user-dropdown>
                        <x-dashboard-user-dropdown-items href="{{ route('dashboard') }}" />
                        <x-dashboard-user-dropdown-items title="Profile" />
                        <x-dashboard-user-dropdown-items title="Settings" />
                    </x-dashboard.dashboard-user-dropdown>
            @endauth

        </div>
        <!-- Mobile menu button (hidden on larger screens) -->
        <div class="md:hidden flex">
            @auth()
                <div class="mr-6">
                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{ Vite::asset('resources/images/profile-picture-3.jpg') }}" alt="User dropdown">
                    <!-- Dropdown menu -->
                    <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div>{{ auth()->user()->username }}</div>
                            <div class="font-medium truncate">{{ auth()->user()->email }}</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                            <x-dashboard-user-dropdown-items href="{{ route('dashboard') }}" />
                            <x-dashboard-user-dropdown-items title="Profile" />
                            <x-dashboard-user-dropdown-items title="Settings" />
                        </ul>
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </div>
                    </div>
                </div>

            @endauth
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
    </div>
</nav>

<x-mobile-navigation/>



