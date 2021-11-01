@extends('layout.plantilla')

@section('titulo', 'Estrategia')

@section('contenido')


    <div style="margin: 2rem">
        <div style="color: rgb(107, 107, 107); background:#efadff">
            <div class="row">
                <div class="col m-3">
                    <h1 class="display-5 text-center">Estrategía </h1>
                    <div class="col-sm-12">
                        <hr>
                    </div>
                    <p style="font-size: 24px;" class="text-justify">
                        Nuestro trabajo está pensado en el cuidado de nuestro entorno inmediato, recurriendo a las prácticas
                        tradicionales de nuestras comunidades en donde se resuelven objetivos comunes, necesidades
                        inmediatas a
                        partir del trabajo comunitario. Nuestra perspectiva es inclusiva, abierta a aprender y enseñar a
                        cuidar
                        nuestro hábitat.
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
    </div> 


@endsection
