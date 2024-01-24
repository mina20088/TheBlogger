<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Laravel</title>
    <!-- CSS files -->
    @vite(['resources/css/dashboard.css','resources/js/dashboard.js'])
    @livewireStyles
  </head>
  <body  class=" layout-fluid">
    {{-- <script src="./dist/js/demo-theme.min.js?1684106062"></script> --}}
    <div class="page">
      <!-- Sidebar -->
      @include('partials.__dashboard-sidebar')
      <div class="page-wrapper">
        <!-- Page header -->
         @include('partials.__dashboard-header')
        <!-- Page body -->
        @include('partials.__dashboard-body')

         <!-- Page footer -->
        @include('partials.__dashboard-footer')
      </div>
    </div>
    @livewireScripts
  </body>
</html>