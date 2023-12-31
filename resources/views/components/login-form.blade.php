<form  {{ $attributes->merge(['class'=>'space-y-6 w-full max-sm:w-full md:w-9/12 lg:w-9/12 xl:w-5/12']) }} action="{{ route('login.store') }}" method="post">
    @csrf
    <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
        <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" value="{{ old('email') }}">
    </div>
    @error('email')
         <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">{{$message}}</p>
    @enderror
    <div>
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
    </div>
    @error('password')
    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">{{$message}}</p>
    @enderror
    <div class="flex justify-between">
        <div class="flex items-start">
            <div class="flex items-center h-5">
                <input id="remember" type="checkbox" name="remember"  class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
            </div>
            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
        </div>
        <a href="{{ route('password-reset.create') }}" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-sm text-blue-700 hover:underline dark:text-blue-500" type="button">Lost Password?</a>

    </div>
    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
        Not registered? <a href="{{ route('register.create') }}" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
    </div>
</form>



