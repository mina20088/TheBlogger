@props(['posts'])
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
    @foreach($posts->skip(0) as $post)
        @if($loop->iteration <= 3)
            <x-blog-card :$post/>
        @endif
    @endforeach
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-3">
    @foreach($posts->skip(3) as $post)
        @if($loop->iteration < 3)
            <x-blog-card :$post/>
        @endif
    @endforeach
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
    @foreach($posts->skip(3) as $post)
        @if($loop->iteration >= 3)
            <x-blog-card :$post/>
        @endif
    @endforeach
</div>
