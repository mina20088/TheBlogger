<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <header>
        @include('partials.__navigation')
    </header>


    <main {{ $attributes->class(['p-[5.7rem] max-lg:p-0 lg:p-0'=>Route::currentRouteName() == 'login.create' ||
        Route::currentRouteName() === 'register.create']) }}>
        {{ $slot }}
    </main>

    @include('partials.__fotter')
</body>

</html>
