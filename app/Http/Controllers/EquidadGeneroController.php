<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquidadGeneroController extends Controller
{
    public function equidad_genero()
    {
        return view('acciones.equidad_genero');
    }
}
