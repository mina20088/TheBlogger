
@props([
    'content' => 'Dashboard'
])
<li {{ $attributes->merge(['class'=>"block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"]) }}>{{ $content }}</a>
</li>