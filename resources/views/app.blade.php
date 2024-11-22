<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Главная страница')</title>
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('header')
    <div class="main">
        @yield('content') 
    </div>
    @include('footer')
</body>
</html>
