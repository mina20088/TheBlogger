
@props([
    'title' =>'Starter Pages'
])
<li class="nav-item menu-open">
    <a href="#" class="nav-link">
        <i {{ $attributes->merge(['class' =>'nav-icon']) }}></i>
        <p>
            {{ $title }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        {{ $slot }}
    </ul>

</li>
