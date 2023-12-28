<x-guest-layout class="grid place-content-center place-items-center h-[53.7rem]">

    <div class="max-sm:p-8 sm:p-8">
        @include('partials.__auth-head',[
        'title'=>'Login',
        'quote'=>'Welcome back! We are happy you have returned to share your thoughts, stories, and ideas with our
        community of creative writers and thinkers. Log in now to connect with fellow bloggers and be heard.'
        ])
    </div>
    <form class='space-y-6 max-sm:w-96 sm:w-96' action="{{ route('login') }}" method="post">
        @csrf
        
        <div>
            <x-input-label value="Email" for="email" />
            <x-text-input type="text" id="email" name="email"  placeholder="email" value="{{ old('email') }}" />
        </div>
        @error('email')
        <x-input-error messages="{{ $message }}" />
        @enderror

        <div>
            <x-input-label value="password" for="password"/>
            <x-text-input type="password" name="password" id="password" placeholder="••••••••"/>
        </div>
        @error('password')
        <x-input-error messages="{{ $message }}" />
        @enderror

        <div class="flex justify-between">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <x-input-checkbox id="remember" name="remember"/>
                </div>
                <x-input-label class="ml-2" value="Remember" for="remember"/>
            </div>

            <a href="#" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="text-sm text-blue-700 hover:underline dark:text-blue-500" type="button">Lost Password?</a>

        </div>
        <x-primary-button type="submit" class="bg-blue-700 hover:bg-blue-800">
            Login
        </x-primary-button>

        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Not registered? <a href="{{ route('register') }}" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
        </div>
    </form>
</x-guest-layout>