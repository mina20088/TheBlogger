<x-guest-layout class="grid grid-cols-1 place-content-center place-items-center h-[53.4rem]">
    <div class="max-sm:p-8 sm:p-8">
        @include('partials.__auth-head',[
            'title'=>'Regestration',
            'quote'=>'Join our community of passionate writers and thinkers. Register today to connect with other bloggers, access writing tips and tools, and share your unique voice with the world.'
        ])
    </div>
    <form class="max-sm:w-[31rem] sm:w-[31rem] xl:w-[60rem]" action="" method="POST">
        @csrf
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <x-float-text-input name="first_name" id="first_name" value="{{ old('first_name') }}" placeholder=""/>
                <x-float-input-label for="first_name">first_name</x-float-input-label>
                @error('first_name')
                 <x-input-error messages="{{ $message }}" />
                @enderror
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <x-float-text-input name="last_name" id="last_name" value="{{ old('last_name') }}" placeholder=""/>
                <x-float-input-label for="last_name">last_name</x-float-input-label>
                @error('first_name')
                 <x-input-error messages="{{ $message }}" />
                @enderror
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-6 group">
                <x-float-text-input name="username" id="username" value="{{ old('username') }}" placeholder=""/>
                <x-float-input-label for="username">username</x-float-input-label>
                @error('username')
                 <x-input-error messages="{{ $message }}" />
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group ">
                <x-float-text-input name="phone" id="phone" value="{{ old('phone') }}" placeholder=""/>
                <x-float-input-label for="phone">phone</x-float-input-label>
                @error('phone')
                 <x-input-error messages="{{ $message }}" />
                @enderror
            </div>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <x-float-text-input name="email" id="email" value="{{ old('email') }}" placeholder=""/>
            <x-float-input-label for="email">email</x-float-input-label>
            @error('email')
             <x-input-error messages="{{ $message }}" />
            @enderror
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <x-float-text-input isPassword='true' name="password" id="password" value="" placeholder=""/>
            <x-float-input-label for="password">Password</x-float-input-label>
            @error('password')
             <x-input-error messages="{{ $message }}" />
            @enderror
        </div>
        <div class="relative z-0 w-full mb-6 group 2">
            <x-float-text-input isPassword='true' name="password_confirmation" id="password_confirmation" value="" placeholder=""/>
            <x-float-input-label for="password_confirmation">Confirm password</x-float-input-label>
            @error('password_confirmation')
             <x-input-error messages="{{ $message }}" />
            @enderror
        </div>
        <div class="grid place-items-start mb-6 w-full max-sm:grid-cols-1 max-sm:place-items-center 2xl:mt-12 md:grid-cols-3 md:gap-2">
            <button type="submit"
                    class="grid text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 md:col-span-2">
                Create account
            </button>
            <div class=""><span>already registered?</span> <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">login</a></div>
        </div>
    </form>
</x-guest-layout>
