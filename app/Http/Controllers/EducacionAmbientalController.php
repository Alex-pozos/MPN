<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducacionAmbientalController extends Controller
{
    public function educacion_ambiental()
    {
        return view('programas.educacion_ambiental');
    }
}
