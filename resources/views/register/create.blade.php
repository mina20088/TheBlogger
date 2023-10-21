<x-layouts.home-layout>
    <h1 class="text-3xl text-center">The Blogger Registration </h1>
    <div class=" grid grid-cols-8 h-[90vh] max-lg:grid-cols-1 max-lg:order-last">
        <div class=" grid grid-cols-1 col-span-3 place-content-center">
            <x-register-form/>
        </div>
        <div class="grid col-span-5 place-items-center max-lg:order-first">
            <img src="{{ asset('images/register.webp') }}" class="h-auto max-w-[50%]" alt="">
        </div>
    </div>

</x-layouts.home-layout>

