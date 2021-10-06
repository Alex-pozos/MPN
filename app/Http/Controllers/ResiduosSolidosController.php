<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResiduosSolidosController extends Controller
{
    public function residuos_solidos()
    {
        return view('programas.residuos_solidos');
    }
}
