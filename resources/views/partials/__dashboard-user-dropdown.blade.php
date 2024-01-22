<div class="nav-item dropdown"> 
    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
      <img src="{{ Vite::asset('resources/images/avatars/000m.jpg') }}" class="avatar avatar-sm" />
      <div class="d-none d-xl-block ps-2">
        <div>{{ Auth::user()->username }}</div>
        <div class="mt-1 small text-muted">{{ auth()->user()->email }}</div>
      </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
      <a href="{{ route('Home.index') }}" class="dropdown-item">Home</a>
      <a href="{{ route('profile.index',['user' => Auth::user()->username]) }}" class="dropdown-item">Profile</a>
      <div class="dropdown-divider"></div>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="dropdown-item">Logout</button>
      </form>
    </div>
  </div>
