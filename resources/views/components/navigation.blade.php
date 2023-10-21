<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('home.index') }}" class="text-white text-2xl font-bold"><img src="{{ asset('images/logo(1)(1).png') }}" width="200" height="67"></a>
        <div class="hidden md:flex space-x-4">
            <a href="{{ route('home.index') }}" class="text-2xl max-lg:text-lg text-white hover:text-blue-300">Home</a>
            <a href="#" class="text-2xl max-lg:text-lg text-white hover:text-blue-300">About</a>
            <a href="#" class="text-2xl max-lg:text-lg text-white hover:text-blue-300">Services</a>
            <a href="#" class="text-2xl max-lg:text-lg  text-white hover:text-blue-300">Contact</a>
        </div>
        <div class="hidden md:flex space-x-4">
            <a href="{{ route('login.create') }}" class="bg-white text-blue-500 hover:bg-blue-100 px-4 py-2 rounded-md">Login</a>
            <a href="{{ route('register.create') }}" class="bg-white text-blue-500 hover:bg-blue-100 px-4 py-2 rounded-md">Register</a>
        </div>
        <!-- Mobile menu button (hidden on larger screens) -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-white p-2 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>



<x-mobile-navigation/>

<x-auth-model>
    <x-login-form/>
</x-auth-model>
