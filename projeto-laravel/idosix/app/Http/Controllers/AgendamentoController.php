<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function abrir()
    {
        return view('agendamento');
    }
}
