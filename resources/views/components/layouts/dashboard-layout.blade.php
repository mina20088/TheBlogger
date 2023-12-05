<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>

    @vite('resources/js/dashboard.js')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js" async></script>
    @livewireStyles

<body class="hold-transition sidebar-mini" id="body" style="visibility: hidden;">
    <div id="toast" class='z-50 relative'>
        <x-toast/>
    </div>

    <div class="wrapper">


        <x-dashboard.dashboard-header/>



        <aside class="main-sidebar bg-gray-800 elevation-4">

            <x-dashboard.dashboard-main-sidebar-branding/>
            <x-dashboard.dashboard-main-sidbar-sidebar/>

        </aside>

        <div class="content-wrapper">
            <div class="content">


                <div class="inline-block float-right">
                    <x-alerts/>
                </div>



                {{ $slot }}
            </div>

        </div>


        <aside class="control-sidebar control-sidebar-dark">

            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>


        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>

            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>

    <script type="text/javascript" async>
         window.id = {{ Auth::user()->id }}
    </script>

    @livewireScripts

</body>
</html>


