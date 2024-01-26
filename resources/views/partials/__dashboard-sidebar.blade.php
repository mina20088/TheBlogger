<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">

      @include('partials.__dashboard-sidebar-toggler-button')

      @include('partials.__dashboard-sidebar-logo')

      {{-- <div class="navbar-nav flex-row d-lg-none">
        <div class="d-none d-lg-flex">
          @include('partials.__dashboard-dark-mode-toggler-button')
          @include('partials.__dashboard-light-mode-toggler-button')
          @include('partials.__dashboard-notification-dropdown')
        </div>
          @include('partials.__dashboard-user-dropdown')
      </div> --}}


      <x-dashboard-side-bar-menu>
        <x-dashboard-side-bar-menu-wrapper>
          <li class="nav-item">
            <x-dashboard-sidebar-item href="{{ route('dashboard') }}" value="Home" icon="fa-solid fa-house"/>
          </li>
          <li class="nav-item dropdown">
            <x-dashboard-sidebar-item class="nav-link dropdown-toggle" ref="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" value='Posts' icon="fa-brands fa-usps"/>
            <x-dashboard-side-bar-dropdown-menu-wrapper>
              <x-dashboard-sidebar-item class="dropdown-item" href="#" value="create" icon="fa-solid fa-plus"/>
              <x-dashboard-sidebar-item class="dropdown-item" href="#" value="show" icon="fa-solid fa-eye" />
            </x-dashboard-side-bar-dropdown-menu-wrapper>
          </li>
        </x-dashboard-side-bar-menu-wrapper>
      </x-dashboard-side-bar-menu>

    </div>
  </aside>