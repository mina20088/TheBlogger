<x-layouts.home-layout>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <x-alerts/>

    @include('components.partials._authentication_fail_rate_limter_error')

    <div class="grid grid-cols-1 h-[63vh] place-content-center place-items-center ">

        <h1 class="place-content-start font-extrabold">Sign in to your account</h1>
        <x-login-form/>
    </div>

</x-layouts.home-layout>

