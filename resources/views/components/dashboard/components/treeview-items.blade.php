@props([
    'title' => 'Active Page',
    'href' => '/'
])

<a href="{{ route($href) }}" class="nav-link">
    <i {{ $attributes->merge(['class'=> 'nav-icon']) }}></i>
    <p> {{ $title }}</p>
</a>

