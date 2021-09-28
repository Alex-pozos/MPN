<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/index/LOGOORIGINALMASPORNOSOTROS (2).png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts bootstrap -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/functions.js') }}" defer></script>

    <title>@yield('titulo')</title>
</head>

<body>
    <div class="row fondo" height="50rem">
        <div id="menu">
            <div class="">
            <img class=" imgresponsive"
                src="{{ asset('img/index/LOGOORIGINALMASPORNOSOTROS (2).png') }}">
            </div>
            <ul>
                <li class="has-sub">
                    <a href="index.php" title="index">
                        INICIO
                    </a>
                </li>
                <li class="has-sub"><a title="">NOSOTROS</a>
                    <ul>
                        <li><a title="Quienes somos" href="#quienessomos">
                                Quiénes somos
                            </a>
                        </li>
                        <li>
                            <a title="Objetivos" href="views/objetivos.php">
                                Alizanzas y tejido social
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a title="">
                        QUÉ HACEMOS
                    </a>
                    <ul>
                        <li><a title="" href="#">Objetivos</a></li>
                        <li><a title="" href="#">Estrategia</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a title="">
                        ACCIONES
                    </a>
                    <ul>
                        <li><a title="" href="#">Campañas de saneamiento ambiental</a></li>
                        <li><a title="" href="#">Fomento al deporte</a></li>
                        <li><a title="" href="#">Fomento a la salud familiar</a></li>
                        <li><a title="" href="#">Equidad de genero</a></li>
                        <li><a title="" href="#">Culrura civica</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a title="">
                        PROGRAMAS
                    </a>
                    <ul>
                        <li><a title="" href="#">Educacion ambiental</a></li>
                        <li><a title="" href="#">Reciduos solidos</a></li>
                        <li><a title="" href="#">Recolección de reciduos solidos</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a title="">
                        PUBLICACIONES
                    </a>
                    <ul>
                        <li><a title="" href="#">Calendario</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a title="">
                        NOTICIAS
                    </a>
                </li>
            </ul>
        </div>
        <div class="col">
            <div id="carouselHeader" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="imgresponsive" src="{{ asset('img/index/DSC_0009.JPG') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="imgresponsive" src="{{ asset('img/index/DSC_0082 (2).JPG') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="imgresponsive" src="{{ asset('img/index/DSC_0082.JPG') }}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="imgresponsive" src="{{ asset('img/index/DSC_0088.JPG') }}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselHeader" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselHeader" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="social-bar">
        <figure id="photo" title="Siguenos en facebook" tooltip-dir="left">
            <a href="https://m.facebook.com/masponosotros/" class="ico ico-facebook" target="_blank">
                <img src="{{ asset('img/index/facebook.png') }}" width="32" height="32" title="facebook">
            </a>
        </figure>
        <figure id="photo" title="Inicio" tooltip-dir="left">
            <a href="index.php" class="ico ico-inicio">
                <img src="{{ asset('img/index/inicio.png') }}" width="32" height="32" title="inicio" target="_blank">
            </a>
        </figure>
        <figure id="photo" title="Visita nuestro canal de youtube" tooltip-dir="left">
            <a href="#" class="ico ico-youtube">
                <img src="{{ asset('img/index/youtube.png') }}" width="32" height="32" title="YouTube">
            </a>
        </figure>
    </div>

    {{-- Contenido de las demas --}}
    @yield('contenido')

    {{-- Pie de pagina --}}
    <div class="row card text-center  bordeFooter">
        <div class="card-header" style="background: #cfcfcf; border: 1px solid silver">
            <h5 class="card-title lead">Contáctanos <i class="fab fa-teamspeak"></i> </h5>
        </div>
        <div class="card-body t-contactanos">
            <a class="m-4" href="#" data-toggle="modal" data-target="#modal_email" style="color:#e01e38">
                <i class="far fa-envelope"></i> Email: maspornosotros@gmail.com
            </a>
            <a class="m-4" href="#" data-toggle="modal" data-target="#modal_telefono" style="color:#68a266">
                <i class="fas fa-phone-square-alt"></i> Teléfonos: (55) 58443083 o 58443022 ext: 114
            </a>
            <a class="m-4" href="#" data-toggle="modal" data-target="#modal_direccion" style="color:#0077ff">
                <i class="fas fa-map-marked-alt"></i> Dirección: Atzayacatl 93, Tula, Milpa Alta, 12200 San Pedro Atocpan, CDMX 
            </a>

        </div>
        <div class="card-footer text-muted lead" style="background: #cfcfcf; border: 1px solid silver">
            2021© Todos los derechos reservados
        </div>
    </div>
</body>

</html>
