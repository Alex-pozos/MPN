<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecoleccionRSolidosController extends Controller
{
    public function recoleccion_r_solidos()
    {
        return view('programas.recoleccion_r_solidos');
    }
}
