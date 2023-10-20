<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Blogger</title>
</head>
<body class="{{ Route::currentRouteName() == 'login.create' ? 'bg-amber-50' : 'bg-white' }}">

<header>
    <x-navigation/>
</header>


<main class="p-20">
    {{ $slot }}
</main>

<x-footter/>
</body>
</html>




