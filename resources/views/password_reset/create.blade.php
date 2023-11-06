<x-layouts.home-layout>
    <x-slot:title>
        {{$title}}
    </x-slot:title>
    <div class="grid grid-cols-1 place-items-center place-content-center h-[59.9vh]">
        <x-alerts/>
        <div class=" w-full h-fit max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-6" action="{{ route('password-reset.store') }}" method="post">
                @csrf
                <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Rest Password</h5>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" value="{{ old('email') }}">
                </div>
                @error('email')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send Password Reset Link</button>
            </form>
        </div>
    </div>

</x-layouts.home-layout>
