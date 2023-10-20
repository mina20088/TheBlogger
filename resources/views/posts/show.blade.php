<x-layouts.home-layout>

    <!-- Header -->


    <div class="grid grid-cols-3 max-lg:grid-cols-1 h-screen">

        <div class="mt-8 p-4 col-span-1">
            <img class="w-full" src="{{ asset('images/placeholder.png') }}">
        </div>
        <!-- Main Content -->
        <div class="container mx-auto mt-8 bg-white p-4 rounded-lg shadow-lg col-span-2">

            <div class="p-4 text-white">
                <div class="container mb-2">
                    <h1 class="text-4xl font-bold text-black">{{ $post->title }}</h1>
                    <p class="text-sm text-black mt-1.5">Posted by <a class="text-blue-600"
                                                               href="{{ route('user.index',$post->user->username) }}">{{ $post->user->name }}</a>
                        from {{ $post->created_at }}</p>
                </div>
            </div>
            <!-- Author Info -->
            <div class="grid grid-cols-2 mb-4 ">
                <div class=" col-span-1">
                    <img src="{{ asset('images/placeholder.png') }}" alt="Author's Profile"
                         class="w-12 h-12 rounded-full float-left mr-4">
                    <h4 class="text-2xl font-semibold mt-1.5"><a href="{{ route('user.index',$post->user->username) }}">{{ $post->user->username }}</a></h4>
                </div>

                <div class="col-span-1">
                    <x-category_button :category="$post->category"/>
                </div>

            </div>

            <!-- Blog Content -->
            <article class="leading-10">
                {{ $post->content }}
            </article>

            <div class="mt-5">
                <a type="button"
                   href="{{ route('home.index') }}"
                   class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-md px-5 py-2.5 text-center mr-6 mb-6">
                    Back
                </a>
            </div>
        </div>

    </div>

</x-layouts.home-layout>
