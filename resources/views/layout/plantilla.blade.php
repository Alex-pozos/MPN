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
    <div class="row fondo">
        <div class="col-sm-3" id="menu">
            <div class="">
            <img class=" imgresponsive"
                src="{{ asset('img/index/LOGOORIGINALMASPORNOSOTROS (2).png') }}">
            </div>
            <ul>
                <li class="has-sub">
                    <a href="/" title="index">
                        <strong>INICIO</strong>
                    </a>
                </li>
                <li class="has-sub">
                    <a title="">
                        <strong>NOSOTROS</strong>
                    </a>
                    <ul>
                        <li><a title="Quienes somos" href="/quienes_somos">
                                Quiénes somos
                            </a>
                        </li>
                        <li>
                            <a title="Objetivos" href="/#alianzas">
                                Alizanzas y tejido social
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a title="">
                        <strong>QUÉ HACEMOS</strong>
                    </a>
                    <ul>
                        <li><a title="" href="/objetivos">Objetivos</a></li>
                        <li><a title="" href="/estrategia">Estrategia</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a title="">
                        <strong>ACCIONES</strong>
                    </a>
                    <ul>
                        <li><a title="" href="/campañas_s_ambiental">Campañas de saneamiento ambiental</a></li>
                        <li><a title="" href="/fomento_deporte">Fomento al deporte</a></li>
                        <li><a title="" href="/fomento_s_familiar">Fomento a la salud familiar</a></li>
                        <li><a title="" href="/equidad_genero">Equidad de genero</a></li>
                        <li><a title="" href="/cultura_civica">Culrura civica</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a title="">
                        <strong>PROGRAMAS</strong>
                    </a>
                    <ul>
                        <li><a title="" href="/educacion_ambiental">Educacion ambiental</a></li>
                        <li><a title="" href="/residuos_solidos">Residuos solidos</a></li>
                        <li><a title="" href="/recoleccion_r_solidos">Recolección de reciduos solidos</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a title="">
                        <strong>PUBLICACIONES</strong>
                    </a>
                    <ul>
                        <li><a title="" href="/calendario">Calendario</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a title="" href="https://maspornosotros.wordpress.com/" target="_blank">
                        <strong>NOTICIAS</strong>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9 imgresponsive">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                  </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="imgresponsive" src="{{ asset('img/index/P1000077.JPG') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="imgresponsive" src="{{ asset('img/index/DSC_0227.JPG') }}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="imgresponsive" src="{{ asset('img/index/flora de la región zefirantes en la casa de Niquiz.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="imgresponsive" src="{{ asset('img/index/Imagen 091.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item ">
                        <img class="imgresponsive" src="{{ asset('img/index/IMG_20210703_115038.jpg') }}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="imgresponsive" src="{{ asset('img/index/Sin título-1.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="imgresponsive" src="{{ asset('img/index/P1000130.JPG') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item ">
                        <img class="imgresponsive" src="{{ asset('img/index/P1020671.jpg') }}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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
        <div class="card-header" style="background: #FFE26D; border: 1px solid silver">
            <h5 class="card-title lead">Contáctanos <i class="fab fa-teamspeak"></i> </h5>
        </div>
        <div class="card-body t-contactanos fondo2">
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
        <div class="card-footer text-muted lead" style="background: #FFE26D; border: 1px solid silver">
            2021© Todos los derechos reservados | Más por nosotros A.C.
        </div>
    </div>
</body>

</html>
