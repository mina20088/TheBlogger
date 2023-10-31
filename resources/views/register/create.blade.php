<x-layouts.home-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <div class=" grid col-span-1 row-span-1 place-content-start">
        <h1 class="text-3xl text-center ">The Blogger Registration </h1>
    </div>
    <div class=" grid grid-cols-8 h-[67.3vh] max-lg:grid-cols-1 max-lg:h-[99.3vh] max-lg:order-last">

        <div class=" grid grid-cols-1 col-span-4 place-content-center">
            <x-register-form/>
        </div>
        <div class="grid col-span-4 place-items-center max-lg:order-first">
            <img src="{{ Vite::asset('resources/images/register.webp')  }}" class="h-auto max-w-[50%]" alt="">
        </div>
    </div>

</x-layouts.home-layout>

