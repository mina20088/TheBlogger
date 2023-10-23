<div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
        <div class="font-medium ">Pro User</div>
        <div class="truncate">name@flowbite.com</div>
    </div>
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 max-h-32 overflow-y-auto" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
        {{ $slot }}
    </ul>
    <div class="py-2">
        <a href="#"
           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
            out</a>
    </div>
</div>
