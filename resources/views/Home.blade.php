<x-layouts.home-layout class="p-20">
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <x-cards-grid :$posts/>
</x-layouts.home-layout>
