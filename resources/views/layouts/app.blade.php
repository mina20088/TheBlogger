<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Laravel</title>
  <!-- CSS files -->
  {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" /> --}}
  @vite(['resources/css/dashboard.scss','resources/js/dashboard.js'])
  @livewireStyles
  <style>
    @import url('https://rsms.me/inter/inter.css');
    :root {
      --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }
    body {
      font-feature-settings: "cv03", "cv04", "cv11";
    }
  </style>
</head>
  
<body class=" layout-fluid">
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