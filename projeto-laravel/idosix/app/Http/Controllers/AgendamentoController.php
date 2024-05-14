<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agendamento;
use App\Models\Especialidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\Flysystem\UrlGeneration\PublicUrlGenerator;
use Illuminate\Support\Facades\View;

class AgendamentoController extends Controller
{
    public function index()
    {
        $usuarios = User::where('tipo', 'medico')->get();
        $especialidades = Especialidades::all();
        return view('novoagendamento', compact(['usuarios','especialidades']));
    }

    public function store (Request $request) {

        $agendamento = new Agendamento;

        $agendamento->id_cliente = $request->id_cliente;
        $agendamento->id_medico = $request->id_medico;
        $agendamento->data = $request->data;
        $agendamento->forma_pagamento = $request->forma_pagamento;

        $agendamento->save();

        return redirect('/cliente/dashboard');

}
}