@props([
    'path' => 'resources/images/profile-picture-1.jpg',
    'notification' => "New message from Jese Leos Hey, what's up? All set for the presentation?",
    'created_at' => "a few moments ago"
])
<a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
    <div class="flex-shrink-0">
        <img class="rounded-full w-11 h-11" src={{ Vite::asset($path) }} alt="Jeseimage">
    </div>
    <div class="w-full pl-3">
        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">{{ $notification }}</div>
        <div class="text-xs text-blue-600 dark:text-blue-500">{{ $created_at }}</div>
    </div>
</a>
