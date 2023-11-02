<x-layouts.home-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <div class=" grid col-span-1 row-span-1 place-content-start max-sm:place-content-center max-lg:pt-20 max-lg:place-content-center">
        <h1 class="text-3xl text-center ">The Blogger Registration </h1>
    </div>
    <div class=" grid grid-cols-8 h-auto max-lg:grid-cols-1 max-lg:order-last max-sm:grid-cols-12 max-lg:pb-10">
        <div class=" grid grid-cols-1 col-span-4 place-content-center max-sm:col-span-12 px-10 max-md:pb-3">
            <x-register-form/>
        </div>
        <div class="grid col-span-4 place-items-center max-lg:order-first max-md:col-span-12 ">
            <img src="{{ Vite::asset('resources/images/register.webp')  }}" class="h-auto w-full" alt="registration">
        </div>
    </div>

</x-layouts.home-layout>

