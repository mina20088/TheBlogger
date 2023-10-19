@props([
    'background',
    'text'=>''
])
<a
    class="flex basis-1/2 justify-end" href="#">
    <span {{ $attributes->merge(['class' =>'text-xs font-medium mr-2 px-6 py-2 rounded-full']) }}>
       {{ $slot }}
    </span>
</a>
