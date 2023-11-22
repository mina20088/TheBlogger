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
        <div class="flex flex-col mt-4  h-[8rem]">
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->excrept }}</p>
        </div>`
        <div class="flex flex-row bg-gray-100 justify-center">
            <a data-tooltip-target="read-more" type="button" href="{{ route('posts.show',$post->slug) }}" class="mt-3 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                <i class="fab fa-readme text-2xl text-red-950"></i>
            </a>
            <div id="read-more" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                 Read More
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            @auth()
                @if(Auth::user()->follows($post->user))
                    <form class="inline-flex" method="post" action="{{ route('follower.unfollow',$post->user->username) }}">
                        @csrf
                        <button data-tooltip-target="Follow" class="text-2xl text-blue-600" type="submit"><i class="fas fa-unlink"></i></button>
                        <div id="Follow" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Follow
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </form>
                @else
                    <form class="inline-flex" method="post" action="{{ route('follower.follow',$post->user->username) }}">
                        @csrf
                        <button data-tooltip-target="Follow" class="text-2xl text-blue-600" type="submit"><i class="fab fa-foursquare"></i></button>
                        <div id="Follow" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Follow
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </form>
                @endif

            @endauth
        </div>

    </div>
</div>
