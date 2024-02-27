<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Press Start 2P' rel='stylesheet'>
    <link rel="shortcut icon" href="img/Capi.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/peliculas-user.css') }}">
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
            <li><img src="img/rei.jpg" class="icons"></li>
        </ul>

    </header>

    <main>
        <div class="container">
            <div class="movie-main">
                <img src="img/2.png" alt="">
                <br> <br> <br> <br>
                <p class="espacio">Hipo, Chimuelo y un misterioso jinete de dragones unen fuerzas para proteger la isla de Berk </p>
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
                <h2>Nuestra seleccion para walter</h2>
                <div class="owl-carousel owl-theme" id="continue"></div>
            </div>

            <div class="container-movies">
                <h2>volver a verlo</h2>
                <div class="owl-carousel owl-theme" id="emAlta"></div>
            </div>

            <div class="container-movies">
                <h2>Tendencias</h2>
                <div class="owl-carousel owl-theme" id="pqAssistiu"></div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container-footer">
            <div class="midias">
                <img src="img/fb.png" alt="">
                <img src="img/instagram.png" alt="">
                <img src="img/twitter.png" alt="">
                <img src="img/youtube.png" alt="">

            </div>
        </div>
    </footer>



    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="{{ asset('js/owl/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/pelicula.js') }}"></script>
</body>
</html>