
<header class="navbar navbar-expand-md d-print-none d-none d-sm-none d-lg-flex justify-content-end">
    <div class="d-flex me-5">
      <div class="navbar-nav flex-row order-xl-last justify-content-end">
        <div class="d-none d-md-flex">
          @include('partials.__dashboard-dark-mode-toggler-button')
          @include('partials.__dashboard-light-mode-toggler-button')
          @include('partials.__dashboard-notification-dropdown')
        </div>
        @include('partials.__dashboard-user-dropdown')
      </div>
    </div>
  </header>