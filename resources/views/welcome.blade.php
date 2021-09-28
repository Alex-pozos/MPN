@extends('layout.plantilla')

@section('titulo', 'Más por Nosotros A.C.')

@section('contenido')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <div class="container mt-4">
        <div class="section-title text-center">
            <span>Numeralia</span>
        </div>
        <div class="row">
            <div class="col">
                <img src="{{ asset('img/index/comunidad.png') }}" alt="">
            </div>
            <div class="col">
                <h1 class="display-4" style="color:#004b87">Alcance comunitario</h1>
            </div>
        </div>
        <div id="projectFacts" class="sectionClass">
            <div class="fullwidth height columns">
                <div class="factswrap" onscroll="myFunction()">
                    <div class="item fadeupbig animated animated" data-number="450" style="visibility: visible;">
                        <img src="img/networking.png" alt="">
                        <p id="number1" class="number">0</p>
                        <span class="Line-under"></span>
                        <p>Lorem</p>
                    </div>
                    <div class="item fadeupbig animated animated" data-number="20" style="visibility: visible;">
                        <img src="img/portfolio.png" alt="">
                        <p id="number2" class="number">0</p>
                        <span class="Line-under"></span>
                        <p>Lorem</p>
                    </div>
                    <div class="item fadeupbig animated animated" data-number="700" style="visibility: visible;">
                        <img src="img/handshake.png" alt="">
                        <p id="number3" class="number">0</p>
                        <span class="Line-under"></span>
                        <p>Lorem</p>
                    </div>
                    <div class="item fadeupbig animated animated" data-number="8" style="visibility: visible;">
                        <img src="img/company.png" alt="">
                        <p id="number4" class="number">0</p>
                        <span class="Line-under"></span>
                        <p>Lorem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

@endsection
