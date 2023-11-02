<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="X-CSRF-TOKEN" content="{{ csrf_token() }}">
    @vite('resources/js/app.js')
    <title>{{ $title  }}</title>
</head>
<body style="visibility: hidden;">

<header>
    <x-navigation/>
</header>


<main class="{{ Route::currentRouteName() == 'login.create' || Route::currentRouteName() === 'register.create' ? 'p-[5.7rem] max-lg:p-0': 'p-20' }}">
    {{ $slot }}
</main>

<x-footter/>
</body>

</html>




