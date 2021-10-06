<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjetivosController extends Controller
{
    public function objetivos()
    {
        return view('que_hacemos.objetivos');
    }
}
