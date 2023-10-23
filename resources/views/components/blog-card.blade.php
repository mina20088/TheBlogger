@props(['post'])
<div class ='bg-white shadow-lg rounded-lg sm:max-w-full md:max-w-screen-lg relative md:h-[36rem]'>
    <a href="#">
        <img class="w-full h-40 sm:h-48 lg:h-56 object-cover" src="{{ Vite::asset('resources/images/placeholder.png') }}" alt="" />
    </a>
    <div class="p-5">
        <a href="{{route('user.index',$post->user->username)}}">by: <span class="text-blue-600">{{ $post->user->username }}</span></a>
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
        </a>
        <div class="flex justify-between items-center">
            <p class="text-gray-600 basis-1/2">{{  $post->created_at }}</p>

            <x-category_button  :category="$post->category"/>
        </div>
        <div class="flex flex-col mt-4">
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->excrept }}</p>

        </div>

        <a href="{{ route('posts.show',$post->slug) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 absolute top-[28rem]">
            Read more
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>
