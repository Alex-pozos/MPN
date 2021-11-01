@extends('layout.plantilla')

@section('titulo', 'Quienes somos')

@section('contenido')
    <div style=" background: rgb(236, 255, 167)">
        <div>

            <div style="background: rgb(236, 255, 167);">
                <div class="row">
                    <div class="col-sm-6 mt-3 ml-3">
                        <div class="col-sm-11 ml-3">
                            <div id="slider">
                                <input type="radio" name="slider" id="slide1" checked>
                                <input type="radio" name="slider" id="slide2">
                                <input type="radio" name="slider" id="slide3">
                                <input type="radio" name="slider" id="slide4">
                                <div id="slides">
                                    <div id="overflow">
                                        <div class="inner">
                                            <div class="slide slide_1">
                                                <div class="slide-content">
                                                    <img class="imgresponsive"
                                                        src="{{ asset('img/nosotros/quienes_somos/CAM00734.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="slide slide_2">
                                                <div class="slide-content">
                                                    <img class="imgresponsive"
                                                        src="{{ asset('img/nosotros/quienes_somos/DSC_0127.JPG') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="slide slide_3">
                                                <div class="slide-content">
                                                    <img class="imgresponsive"
                                                        src="{{ asset('img/nosotros/quienes_somos/DSC_0057.JPG') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="slide slide_4">
                                                <div class="slide-content">
                                                    <img class="imgresponsive"
                                                        src="{{ asset('img/nosotros/quienes_somos/DSC_0463.JPG') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="controls">
                                    <label for="slide1"></label>
                                    <label for="slide2"></label>
                                    <label for="slide3"></label>
                                    <label for="slide4"></label>
                                </div>
                                <div id="bullets">
                                    <label for="slide1"></label>
                                    <label for="slide2"></label>
                                    <label for="slide3"></label>
                                    <label for="slide4"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 m-2">
                        <div class="details-left-info">
                            <h1>Quiénes somos</h1>
                            <div class="details-right-head">
                                <h3 style="font-size: 18px; color: #941515">MAS POR NOSOTROS A.C.</h3>
                                <ul class="pro-rate">
                                </ul>
                                <p class="product-detail-info" align="justify" style="font-size: 17px; width:135%">

                                    Mas por Nosotros es un proyecto ambiental transdiciplinar, a través de la organización
                                    social y la inclusión realiza diversas acciones para contribuir a un bienestar ambiental
                                    a
                                    través del trabajo comunitario, incidiendo con las escuelas, comercios, empresas,
                                    agentes
                                    culturales y habitantes de los pueblos originarios del sureste la Ciudad de México,
                                    donde se
                                    concentra una gran parte de los recursos naturales de la Ciudad.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
