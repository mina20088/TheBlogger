<x-layouts.home-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <div class="grid grid-cols-8 h-auto max-lg:grid-cols-1 max-lg:order-last max-sm:grid-cols-12 max-lg:pb-10 lg:grid-cols-12">
        <div class="grid grid-cols-1 col-span-4 place-content-center max-sm:col-span-12 px-10 max-md:pb-3 lg:col-span-6 lg:mt-5 lg:mb-5 xl:mt-28 sm:mt-8">
            <h1 class="text-3xl text-center max-sm:text-sm">The Blogger Registration </h1>
            <figure class="max-w-screen-md mx-auto text-center mb-3">
                <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                    <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                </svg>
                <blockquote>
                    <p class="text-2xl italic font-medium text-gray-900 dark:text-white max-sm:text-sm lg:text-sm xl:text-lg 2xl:text-2xl">"An artist is someone who uses bravery, insight, creativity, and boldness to challenge the status quo. And an artist takes it personally."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center mt-6 space-x-3">
                    <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                    <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                        <cite class="pr-3 font-medium text-gray-900 dark:text-white max-sm:text-sm">Seth Godin</cite>
                        <cite class="pl-3 text-sm text-gray-500 dark:text-gray-400">
                            American author
                        </cite>
                    </div>
                </figcaption>
            </figure>
            <x-register-form/>
        </div>
        <div class="grid col-span-4 place-items-center bg-gray-100 max-lg:order-first max-md:col-span-12 lg:col-span-6 ">
            <img src="{{ Vite::asset('resources/images/register.png')  }}" class="h-auto w-full" alt="registration">
        </div>
    </div>

</x-layouts.home-layout>

