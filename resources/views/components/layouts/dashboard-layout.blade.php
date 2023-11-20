<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/dashboard.js')
    <title>{{ $title }}</title>
<body class="hold-transition sidebar-mini" id="body" style="visibility: hidden;">
<div class="wrapper">


    <x-dashboard.dashboard-header/>

    <aside class="main-sidebar bg-gray-800 elevation-4">

        <x-dashboard.dashboard-main-sidebar-branding/>
        <x-dashboard.dashboard-main-sidbar-sidebar/>

    </aside>

    <div class="content-wrapper">


        <x-alerts/>
    

        <div class="content">
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

</body>
</html>


