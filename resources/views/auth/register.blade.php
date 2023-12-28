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
            <input type="password" name="password" id="password"
                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                   placeholder="" value=""/>
            <label for="password"
                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
            @error('password')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                    class="font-medium">{{$message}}</p>
            @enderror
        </div>
        <div class="relative z-0 w-full mb-6 group 2">
            <input type="password" name="password_confirmation" id="password_confirmation"
                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                   placeholder="" value=""/>
            <label for="password_confirmation"
                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm
                password</label>
            @error('password_confirmation')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                    class="font-medium">{{$message}}</p>
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
