
<header class="navbar navbar-expand-md d-print-none d-none d-sm-none d-lg-flex justify-content-end">
    <div class="d-flex me-5">
      <div class="navbar-nav flex-row order-xl-last justify-content-end">
        <div class="d-none d-md-flex">
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
    </div>
  </header>