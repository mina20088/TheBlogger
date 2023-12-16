@props([
    'content'
])
<a {{ $attributes->merge(['class'=>"text-2xl max-lg:text-lg text-white hover:text-blue-300"]) }}>
    {{ $content }}
</a>