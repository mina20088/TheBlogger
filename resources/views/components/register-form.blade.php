
<form action="{{ route('register.store') }}" method="post">
    @csrf
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 mb-6 w-full group row-span-2">
            <input type="text" name="first_name" id="first_name"
                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                   placeholder=" " value="{{ old('first_name') }}"/>
            <label for="first_name"
                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                name</label>
            @error('first_name')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                    class="font-medium">{{$message}}</p>
            @enderror
        </div>
        <div class="relative z-0 mb-6 w-full group ">
            <input type="text" name="last_name" id="last_name"
                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                   placeholder=" " value="{{ old('last_name') }}"/>
            <label for="last_name"
                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                name</label>
            @error('last_name')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                    class="font-medium">{{$message}}</p>
            @enderror
        </div>

    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="username" id="username"
                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                   placeholder=" " value="{{old('username')}}"/>
            <label for="username"
                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">username
                (Ex. Google)</label>
            @error('username')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                    class="font-medium">{{$message}}</p>
            @enderror
        </div>
        <div class="relative z-0 w-full mb-6 group ">
            <input type="text" name="phone" id="phone"
                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                   placeholder=" " value="{{ old('phone') }}"/>
            <label for="phone"
                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                number (123-456-7890)</label>
            @error('phone')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                    class="font-medium">{{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="email" id="email"
               class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
               placeholder="" value="{{ old('email') }}"/>
        <label for="email"
               class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
        @error('email')
        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                class="font-medium">{{$message}}</p>
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
    <div class="grid grid-cols-2 place-items-start mb-6 w-full max-sm:grid-cols-1 max-sm:place-items-center 2xl:mt-12">
        <button type="submit"
                class="grid  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Create account
        </button>
        <div class="grid place-content-center place-items-center w-full text-sm font-medium text-gray-500 dark:text-gray-300 max-sm:pt-2 max-lg:place-content-start max-lg:mt-3">
            <div class="flex"><span>already registered?</span> <a href="{{ route('login.create') }}" class="text-blue-700 hover:underline dark:text-blue-500">login</a></div>
        </div>
    </div>

</form>
