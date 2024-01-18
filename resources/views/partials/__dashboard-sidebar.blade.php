<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">

      @include('partials.__dashboard-sidebar-toggler-button')

      @include('partials.__dashboard-sidebar-logo')

      <div class="navbar-nav flex-row d-lg-none">
        <div class="d-none d-lg-flex">
          @include('partials.__dashboard-dark-mode-toggler-button')
          @include('partials.__dashboard-light-mode-toggler-button')
          @include('partials.__dashboard-notification-dropdown')
        </div>
        
        <div class="nav-item dropdown"> 
          <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
            <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
            <div class="d-none d-xl-block ps-2">
              <div>Paweł Kuna</div>
              <div class="mt-1 small text-muted">UI Designer</div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a href="#" class="dropdown-item">Status</a>
            <a href="./profile.html" class="dropdown-item">Profile</a>
            <a href="#" class="dropdown-item">Feedback</a>
            <div class="dropdown-divider"></div>
            <a href="./settings.html" class="dropdown-item">Settings</a>
            <a href="./sign-in.html" class="dropdown-item">Logout</a>
          </div>
        </div>
      </div>
      <x-dashboard_side_bar_menu>
        <x-dashboard_side_bar_menu_wrapper>
          <li class="nav-item">
            <x-dashboard_sidebar_item href="{{ route('dashboard') }}" value="Home" icon="fa-solid fa-house"/>
          </li>
          <li class="nav-item dropdown">
            <x-dashboard_sidebar_item 
                  class="nav-link dropdown-toggle" 
                  ref="#navbar-base" 
                  data-bs-toggle="dropdown" 
                  data-bs-auto-close="false" 
                  role="button" 
                  aria-expanded="false"
                  value='Posts'
                  icon="fa-brands fa-usps"
            />
            <x-dashboard_side_bar_dropdown_menu_wrapper>
              <x-dashboard_sidebar_item class="dropdown-item" href="#" value="create" icon="fa-solid fa-plus"/>
              <x-dashboard_sidebar_item class="dropdown-item" href="#" value="show" icon="fa-solid fa-eye" />
              {{-- <x-dashboard_side_bar_dropdown_dropends_wrapper>
                  <x-dashboard_sidebar_item class="dropdown-item dropdown-toggle" ref="#sidebar-cards" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" value="Cards"/>
                  <x-dashboard_side_bar_dropdown_menu_wrapper>
                    <a href="./cards.html" class="dropdown-item">
                      Sample cards
                    </a>
                    <a href="./card-actions.html" class="dropdown-item">
                      Card actions
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a href="./cards-masonry.html" class="dropdown-item">
                      Cards Masonry
                    </a>
                  </x-dashboard_side_bar_dropdown_menu_wrapper>
              </x-dashboard_side_bar_dropdown_dropends_wrapper> --}}
            </x-dashboard_side_bar_dropdown_menu_wrapper>
          </li>
        </x-dashboard_side_bar_menu_wrapper>
      </x-dashboard_side_bar_menu>

    </div>
  </aside>