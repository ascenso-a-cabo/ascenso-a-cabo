<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Bootstrap 5 (CSS y JS) -->
        @vite(['resources/js/app.js'])
    </head>
    <body class="bg-warning">
            @if (Route::has('login'))
                <nav class="navbar navbar-expand-lg bg-dark d-flex">
                    <div class="container">
                        <img src="img/logoSinFondo.png" alt="">
                    </div>
                    <div class="container">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-light">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-light">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
                        @endif
                    @endauth
                    </div>
                </nav>
            @endif
    </body>
</html>
