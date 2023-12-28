<div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 lg:w-60 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
        <div class="font-medium ">{{ auth()->user()->username }}</div>
        <div data-tooltip-target="tooltip-default" class="truncate text-sm">{{ auth()->user()->email }}</div>
        <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            {{ auth()->user()->email }}
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 max-h-32 overflow-y-auto" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
        {{ $slot }}
    </ul>
    <div class="block  py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</button>
        </form>
    </div>
</div>