<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/Capi.png" type="image/x-icon">
        <title>Pixicinema</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Press Start 2P' rel='stylesheet'>
        <link rel="stylesheet" href="{{ asset('css/css.css') }}">

        <!-- Styles -->
    </head>
    <body class="antialiased">
        
    <div class="fondo1"></div>
    <div class="fondo2"></div>
    <div class="fondo3"></div>
    <div class="fondo4"></div> 
    

    <div class="container-main">
        <header>
            <img class="Logo" src="/imagenes/c.png" alt="">
            <nav>
            <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-1">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-2">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </nav>
            <ul>
                <li>
                    <h1 class="Texto1">Peliculas y series ilimitadas y mucho mas </h1>
                    <h4 class="Texto2">Disfruta donde quieras. Cancela cuando quieras</h4>
                    <h5 class="Texto3">¿Quieres ver PixCinema ya? Ingresa tu email para crear una cuenta</h5>
                </li>
            </ul>
            
        </header>
            
    </body>
</html>
