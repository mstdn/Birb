<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta property="og:site_name" content="{{ config('app.name', 'Birb') }}">
    <meta property="og:title" content="{{ config('app.name', 'Birb') }} Social Network">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{request()->url()}}">
    <!-- Favicon -->
    <link href="{{ asset('favicon.png') }}" rel="icon" type="image/png">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">`
</head>

    <body class="bg-gray-900">
    <div class="flex min-h-screen items-center justify-center">


        <div class="min-h-1/2 c  border border-gray-900 rounded-2xl">

            @yield('content')
            <x-flash-message />
    </div>
    
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>