@extends('layout.plantilla')

@section('titulo', 'Más por Nosotros A.C.')



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@section('contenido')
    <div style="margin: 2rem">

        <div style="color: rgb(129, 127, 127); background:#BCF5A9">
            <div class="row">
                <div class="col text-center m-3">
                    <h1 class="display-5"> Bienvenid@ </h1>
                    <div class="col-sm-12">
                        <hr>
                    </div>
                    <p style="font-size: 24px;">
                        "No pasa un solo día sin que se genere un impacto ambiental en el planetas. Lo que hacemos marca la
                        diferencia, y tenemos que decidir qué tipo de diferencia queremos hacer"
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-3" style="color: rgb(129, 127, 127); background:#a9d9f5">
            <div class="row">
                <div class="col m-3 text-center">
                    <h1 class="display-6">Estrategias</h1>
                    <div class="col-sm-12">
                        <hr>
                    </div>
                    <p style="font-size: 24px;" class="text-justify">
                        Nuestro trabajo está pensado en el cuidado de nuestro entorno inmediato, recurriendo a las prácticas
                        tradicionales de nuestras comunidades en donde se resuelven objetivos comunes, necesidades
                        inmediatas a partir del trabajo comunitario. Nuestra perspectiva es inclusiva, abierta a aprender y
                        enseñar a cuidar nuestro hábitat.
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-3 mb-3" style="background:rgb(255, 222, 133)">
            <div class="row">
                <div class="col mt-3">
                    <div class="section-title text-center m-3">
                        <span>Numeralia</span>
                    </div>
                </div>
            </div>
            <div id="projectFacts" class="row m-3">
                <div class="row">
                    <div class="col">
                        <img class="imgresponsive" src="{{ asset('img/index/maspornosotros.png') }}" alt="">
                    </div>
                    <div class="col">
                        <h1 class="display-4" style="color:#750f0f">
                            Alcance comunitario
                        </h1>
                        <p class="lead">
                            Queremos llegar más lejos.
                        </p>
                    </div>
                </div>
                <div class="fullwidth height columns mb-3">
                    <div class="factswrap" onscroll="myFunction()">
                        <div class="item fadeupbig animated animated" data-number="450" style="visibility: visible;">
                            <img src="{{ asset('img/index/locales.png') }}" alt="">
                            <p id="number1" class="number">0</p>
                            <span class="Line-under"></span>
                            <p>Local</p>
                        </div>
                        <div class="item fadeupbig animated animated" data-number="20" style="visibility: visible;">
                            <img src="{{ asset('img/index/escuelas.png') }}" alt="">
                            <p id="number2" class="number">0</p>
                            <span class="Line-under"></span>
                            <p>Escuelas</p>
                        </div>
                        <div class="item fadeupbig animated animated" data-number="700" style="visibility: visible;">
                            <img src="{{ asset('img/index/ayuntamiento.png') }}" alt="">
                            <p id="number3" class="number">0</p>
                            <span class="Line-under"></span>
                            <p>Municipal</p>
                        </div>
                        <div class="item fadeupbig animated animated" data-number="12" style="visibility: visible;">
                            <img src="{{ asset('img/index/alianzas.png') }}" alt="">
                            <p id="number4" class="number">0</p>
                            <span class="Line-under"></span>
                            <p>Alianzas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3 mb-3 fondo-alianzas" id="alianzas">
            <div class="row">
                <div class="col m-3" style="color: rgb(194, 8, 8)">
                    <h1 class="display-6 text-center">Alianzas</h1>
                    <div class="col-sm-12">
                        <hr>
                    </div>
                    <p style="font-size: 24px;" class="text-justify">
                        Durante nuestra trayectoria hemos trabajado diversas iniciativas, gracias a la empatía con diversos
                        agentes sociales en torno a la urgente necesidad de mitigar y compensar el impacto ambiental
                        producido por la actividad humana en nuestra región.
                    </p>
                </div>
            </div>
            {{-- <div class="card ml-3 mr-3">
                <div class="row ">
                    <div class="col-sm-6">
                        <img style="max-height: 250px;" class="imgresponsive"
                            src="{{ asset('img/alianzas/Arte textil Milpa Alta logo-02.png') }}" alt="">
                    </div>
                    <div class="col-sm-5">
                        <h1 class="display-5">
                            <br><br>
                            Arte textil Milpa Alta
                        </h1>
                    </div>
                </div>
            </div>
            <div class="card ml-3 mr-3 mt-3">
                <div class="row ">
                    <div class="col-sm-6">
                        <img style="max-height: 250px;" class="imgresponsive"
                            src="{{ asset('img/alianzas/guardianes.png') }}" alt="">
                    </div>
                    <div class="col-sm-6">
                        <h1 class="display-5">
                            <br><br>
                            Guardianes del territorio agricola
                        </h1>
                    </div>
                </div>
            </div>
            <div class="card ml-3 mr-3 mt-3">
                <div class="row ">
                    <div class="col-sm-6">
                        <img style="max-height: 250px;" class="imgresponsive"
                            src="{{ asset('img/alianzas/hacienda_carmen.png') }}" alt="">
                    </div>
                    <div class="col-sm-6">
                        <h1 class="display-5">
                            <br><br>
                            Hacienda del Carmen
                        </h1>
                    </div>
                </div>
            </div>
            <div class="card ml-3 mr-3 mt-3">
                <div class="row ">
                    <div class="col-sm-6">
                        <img style="max-height: 250px;" class="imgresponsive"
                            src="{{ asset('img/alianzas/Logo-TecNM-2017.png') }}" alt="">
                    </div>
                    <div class="col-sm-6">
                        <h1 class="display-5">
                            <br><br>
                            Tecnologico nacional de méxico
                        </h1>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col text-center m-3">
                    <a href="/alianzas_t_social" class="btn btn-outline-danger btn-lg">Conocer más</a>
                </div>
            </div>
        </div>
    </div>
@endsection
