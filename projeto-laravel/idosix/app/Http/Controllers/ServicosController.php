<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function abrir()
    {
        return view('servicos');    
    }
}
