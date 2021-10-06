<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampañasAmbientalController extends Controller
{
    public function campañas_s_ambiental()
    {
        return view('acciones.campañas_s_ambiental');
    }
}
