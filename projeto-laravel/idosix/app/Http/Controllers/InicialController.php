<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicialController extends Controller
{
    public function abrir()
    {
        return view('inicial');
    }
}
