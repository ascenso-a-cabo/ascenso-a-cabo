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
                <nav class="navbar bg-dark">
                    <div class="container">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-white">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-white">Register</a>
                        @endif
                    @endauth
                    </div>
                </nav>
            @endif
    </body>
</html>
