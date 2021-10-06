<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FomentoDeporteController extends Controller
{
    public function fomento_deporte()
    {
        return view('acciones.fomento_deporte');
    }
}
