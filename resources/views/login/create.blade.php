<x-layouts.home-layout>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

   

    @include('components.partials._authentication_fail_rate_limter_error')

    <div class="grid grid-cols-1 place-content-center place-items-center max-sm:p-20 sm:p-20 md:p-28 lg:p-28 xl:p-56">

        <x-alerts/>

        <h1 class="place-content-start font-extrabold">Sign in to your account </h1>
        
        <x-login-form/>
    </div>

</x-layouts.home-layout>

