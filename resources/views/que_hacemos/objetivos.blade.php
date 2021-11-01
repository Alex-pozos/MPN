@extends('layout.plantilla')

@section('titulo', 'Objetivos')

@section('contenido')

    <div style="margin: 2rem">

        <div style="color: rgb(82, 82, 82); background:#c9bfff">
            <div class="row">
                <div class="col m-3">
                    <h1 class="display-5 text-center">Objetivo </h1>
                    <div class="col-sm-12">
                        <hr>
                    </div>
                    <p style="font-size: 24px;">
                        Nuestro objetivo es contribuir a la mitigación y compensación del impacto ambiental a través de
                        acciones y programas educativos enfocados a la conservación del medio ambiente y el saneamiento
                        ambiental, así como la enseñanza y aprendizaje de los saberes comunitarios como el adecuado
                        aprovechamiento y manejo de los recursos naturales.
                    </p>
                </div>
            </div>
            <div class="row">
               <div class="col-sm-3">
   
               </div>
               <div class="col-sm-6 text-center" style="margin: 15px">
                  <img class="imgresponsive" src="{{ asset('img/que_hacemos/objetivo/sanamiento.jpg')}}" alt="">
               </div>
               <div class="col-sm-3">

               </div>
            </div>
        </div>

    </div>

@endsection
