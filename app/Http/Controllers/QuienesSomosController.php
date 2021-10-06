<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
    public function quienes_somos()
    {
        return view('nosotros.quienes_somos');
    }
}
