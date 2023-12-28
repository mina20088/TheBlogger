<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">

        <x-application-logo/>

        <div class="hidden md:flex space-x-4">
            @guest()
                <x-navigation-items href="{{ route('Home.index') }}" content="Home"/>
                <x-navigation-items href="#" content="About"/>
                <x-navigation-items href="#" content="Services"/>
                <x-navigation-items href="#" content="Contact"/>
            @endguest
        </div>
        <div class="hidden md:flex space-x-4">
            @guest()
                <x-login-button href="{{ route('login') }}"/>
                <x-register-button href="{{ route('register') }}"/>
            @endguest

            @auth()
                    <!--user avatar-menus-button-->
                    <x-user-avatar-button class="text-white"/>
                    <!-- Dropdown menu -->
                    <x-user-dropdown>
                        <x-user-dropdown-items href="#"/>
                        <x-user-dropdown-items href="#" content="Profile" />
                        <x-user-dropdown-items />
                    </x-user-dropdown>
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
                            <x-user-dropdown-items href="#"/>
                            <x-user-dropdown-items content="Profile" />
                            <x-user-dropdown-items content="Settings" />
                        </ul>
                        <div class="py-1">
                            <form method="POST" action="{{ route('logout') }}">
                                <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</button>
                            </form>
                           
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

@include('partials.__mobile-navigation')