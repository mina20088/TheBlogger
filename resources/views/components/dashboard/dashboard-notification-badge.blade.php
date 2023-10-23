@props([
    'notifications' => 15
])
<a class="nav-link" data-toggle="dropdown" href="#">
    <i class="far fa-comments text-xl"></i>
    <span class="badge badge-danger navbar-badge">{{ $notifications }}</span>
</a>
