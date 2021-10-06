<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CulturaCivicaController extends Controller
{
    public function cultura_civica()
    {
        return view('acciones.cultura_civica');
    }
    
}
