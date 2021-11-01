@extends('layout.plantilla')

@section('titulo', 'Alianzas y tejido social')

@section('contenido')

    <div style="margin: 2rem">
        <div style="color: rgb(129, 127, 127); background:#FEE8A6">
            <div class="row">
                <div class="col m-3" style="color: rgb(107, 9, 9)">
                    <h1 class="display-5 text-center"> Alianzas y tejido social</h1>
                    <div class="col-sm-12">
                        <hr>
                    </div>
                    <p class="lead text-justify">
                        Personas, organizaciones, agentes culturales y empresas con quienes se han realizado colaboraciones
                        culturales y ambientales en diferentes iniciativas de Más Por Nosotros.
                    </p>
                    <b style="font-size: 24px;">Escuelas y organizaciones culturales</b>
                    <br>
                    <p class="lead text-justify">
                        Escuela Secundaria No. 3 Xolotl, Instituto Tecnológico de Milpa Alta ITMA I, Universidad Autónoma de
                        la Ciudad de México UACM Plantel San Lorenzo Tezonco, Contra viento Atoltecayotl , Salva Guarda del
                        Arte Textil de Milpa Alta, Casa de Arte Atlixco en Santa Ana Tlacotenco, Niños Voces y Música de la
                        Tierra en Movimiento, Academia de la Lengua Nahuatl, Consejo de la Crónica de Milpa Alta, Mujeres de
                        Atocpan, Inmujeres, Libro Club Fernando Benítez / In Cuallli ohitli, “Cuicacalli” Academia de la
                        Lengua y la Cultura Nahuatl. Estudio Primal.
                    </p>
                    <b style="font-size: 24px;">Empresas y negocios</b>
                    <br>
                    <p class="lead text-justify">
                        LIEC, Hagamos poder, RestauranteMoles Don Pancho. Moles Chio. Abarrotes “Los guajolotes”. Casa
                        Rocha. Moles Doña Elena. Casa Ángelita. Casa Garita. Mercantil Mexicana Chiles y Semillas.
                    </p>
                    <b style="font-size: 24px;">Personas</b>
                    <br>
                    <p class="lead text-justify">
                        Tomas Sánchez Alvarado. Familia Abad García. Familia Sánchez de Santa Ana Tlacotenco. Tizoc Enrique
                        Baranda. Héctor Celedón Muñiz. Rosalba Nieto. Carlos Montoya. Javier Galicia Silva. Jesús
                        Villanueva. Raymundo Flores Melo. Antonia Palma. Juan Carlos Loza Jurado. Flor Soledad Hernández
                        Villegas. Isela Xospa. Alexia de la Seigliere. Silvia Robles López. Jaime Vega Avila. David Elizalde
                        Sánchez. Imelda Olivos. Familia Olivos Rodríguez de San Pedro Atocpan. Maximina Jurado. Genaro Loza.
                        Flor Chavira. Alejandra Sánchez. Omar Rosales. Antonio Molina Martínez. Francisco Morales Baranda.
                        Juan Rafael Zimbrón Romero. Jovany Iglesias López. Rolando Iglesias Romero. Hilarión Morales Corona
                        Tecal hipa. Manuel Elizalde. Rosy Reyes. Valentín Guadalupe García Rodríguez. Martha Retana Zamora.
                        Nadia Vega Baranda. Familia García Guzmán. Paola González. Iván Morales Romero.
                    </p>

                    {{-- Inicio de la seccion de las  cards de las alianzas --}}
                    <div class="row" style="text-align: center">
                        <div class="col-sm-12">
                            {{-- <h1 class="display-5 text-center">Todas las Alianzas</h1> --}}
                            <hr>
                        </div>
                        <div class="card m-3" style="max-width: 16rem;">
                            <div class="row no-gutters">
                                <div class="col m-1">
                                    <img class="imgresponsive" src="{{ asset('img/nosotros/alianzas/hacienda_carmen.png') }}"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card m-3" style="max-width: 16rem;">
                            <div class="row no-gutters">
                                <div class="col m-1">
                                    <img class="imgresponsive"
                                        src="{{ asset('img/nosotros/alianzas/Arte textil Milpa Alta logo-02.png') }}" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card m-3" style="max-width: 16rem;">
                            <div class="row no-gutters">
                                <div class="col m-1">
                                    <img class="imgresponsive" src="{{ asset('img/nosotros/alianzas/logo_uacm.png') }}"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card m-3" style="max-width: 16rem;">
                            <div class="row no-gutters">
                                <div class="col m-1">
                                    <img class="imgresponsive" src="{{ asset('img/nosotros/alianzas/Logo-TecNM-2017.png') }}"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card m-3" style="max-width: 16rem;">
                            <div class="row no-gutters">
                                <div class="col m-1">
                                    <img class="imgresponsive" src="{{ asset('img/nosotros/alianzas/guardianes.png') }}"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card m-3" style="max-width: 16rem;">
                            <div class="row no-gutters">
                                <div class="col m-1">
                                    <img class="imgresponsive" src="{{ asset('img/nosotros/alianzas/moles chio.png') }}"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card m-3" style="max-width: 16rem;">
                            <div class="row no-gutters">
                                <div class="col m-1">
                                    <img class="imgresponsive" src="{{ asset('img/nosotros/alianzas/Logo-LIEC.png') }}" alt="...">
                                </div>
                            </div>
                        </div>   
                        <div class="card m-3" style="width: 16rem;">
                            <div class="row no-gutters">
                                <div class="col m-1">
                                    <img class="imgresponsive" src="{{ asset('img/nosotros/alianzas/Imagen25.png') }}" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card m-3" style="max-width: 16rem;">
                            <div class="row no-gutters">
                                <div class="col m-1">
                                    <img class="imgresponsive" src="{{ asset('img/nosotros/alianzas/images.jpeg') }}" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card m-3" style="max-width: 16rem;">
                            <div class="row no-gutters">
                                <div class="col m-1">
                                    <img class="imgresponsive" src="{{ asset('img/nosotros/alianzas/Logo Contraviento-04.png') }}"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card m-3" style="max-width: 16rem;">
                            <div class="row no-gutters">
                                <div class="col m-1">
                                    <img class="imgresponsive" src="{{ asset('img/nosotros/alianzas/escudo4x4.png') }}" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="card m-3" style="max-width: 16rem;">
                            <div class="row no-gutters">
                                <div class="col m-1">
                                    <img class="imgresponsive" src="{{ asset('img/nosotros/alianzas/itma.png') }}" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Fin de las cards de las alianzas --}}
                </div>
            </div>
        </div>
    </div>

@endsection
