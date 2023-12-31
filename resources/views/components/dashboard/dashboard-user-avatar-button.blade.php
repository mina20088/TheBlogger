<button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
        {{ $attributes->merge(['class'=> 'flex items-center text-sm font-medium  rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white']) }}
        type="button">
    <span class="sr-only">Open user menu</span>
    <img class="w-8 h-8 mr-2 rounded-full" src="{{ Vite::asset('resources/images/profile-picture-3.jpg') }}"
         alt="user photo">
     {{Str::wrap(" ", auth()->user()->first_name,auth()->user()->last_name) }}
    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
         viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 4 4 4-4"/>
    </svg>
</button>
