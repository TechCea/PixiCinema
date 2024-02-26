<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Press Start 2P' rel='stylesheet'>
    <link rel="shortcut icon" href="img/Capi.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/home-user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl/owl.theme.default.min.css') }}">

    <title>Pixicinema</title>
</head>

<body>
    <header>
        <img src="/img/Pixic.png" >

        <nav>
            <ul class="menu-nav">
                <li>
                    <a>Navegar <i class="fas fa-sort-down"></i></a>

                </li>
                <li><a href="/Home">Inicio</a></li>
                <li><a href="/Series">Series</a></li>
                <li><a href="/Peliculas">Peliculas</a></li>
                <li><a href="">Mi lista</a></li>
            </ul>
        </nav>

        <ul class="menu-icons">
            <li><img src="img/lupa.png" class="icons"></li>
            <li><a href="">INFANTIL</a></li>
            <li><img src="img/presente.png" class="icons"></li>
            <li><img src="img/sino.png" class="icons"></li>
            <li><img src="img/rei.jpg" class="icons"></li>
        </ul>

    </header>

    <main>
        <div class="container">
            <div class="movie-main">
                <img src="img/dbz.png" alt="">
                <p>La saga Freeza es el segundo arco principal del anime Dragon Ball Z.
                    El conjunto principal es la guardada luta entre Goku y Freezer.</p>
            </div>
            
            <div class="buttons">
                <button class="btn play">
                    <i class="fas fa-play"></i>
                    Reproducir
                </button>

                <button class="btn info">
                    <i class="fas fa-info-circle"></i>
                    Mas informacion
                </button>
            </div>
        </div>
    </main>

    <section>
        <div class="carousel-movies">
            <div class="container-movies">
                <h2>Míralo de nuevo</h2>
                <div class="owl-carousel owl-theme" id="continue"></div>
            </div>

            <div class="container-movies">
                <h2>Populares</h2>
                <div class="owl-carousel owl-theme" id="emAlta"></div>
            </div>

            <div class="container-movies">
                <h2>Porque viste El avatar</h2>
                <div class="owl-carousel owl-theme" id="pqAssistiu"></div>
            </div>

            <div class="container-movies">
                <h2>Originales de Pixicinema</h2>
                <div class="owl-carousel owl-theme" id="original"></div>
            </div>
        </div>
    </section>

    <footer>
    </footer>



    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="{{ asset('js/owl/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>