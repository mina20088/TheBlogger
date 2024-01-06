<x-guest-layout class="grid place-content-center place-items-center h-[53.7rem]">
    <div class="mb-4 text-sm text-gray-600">
        @include('partials.__auth-head',[
            'title'=>'Forget Password',
            'quote'=>  __("Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.")
            ])
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class='space-y-6 max-xs:w-[19rem] max-sm:w-96 sm:w-96' method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input type="text" id="email" name="email"  placeholder="email" value="{{ old('email') }}" />
            @error('email')
              <x-input-error messages="{{ $message }}" />
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="w-full" type="submit">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
