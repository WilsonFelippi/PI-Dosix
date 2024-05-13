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
        $medicos_tipo1 = User::where('id_especialidade', 1)->get();
        $medicos_tipo2 = User::where('id_especialidade', 2)->get();
        $medicos_tipo3 = User::where('id_especialidade', 3)->get();
        $medicos_tipo4 = User::where('id_especialidade', 4)->get();
        $medicos_tipo5 = User::where('id_especialidade', 5)->get();
        $medicos_tipo6 = User::where('id_especialidade', 6)->get();
        $especialidades = Especialidades::all();
        return view('novoagendamento', compact('usuarios','especialidades', 'medicos_tipo1', 'medicos_tipo2', 'medicos_tipo3', 'medicos_tipo4', 'medicos_tipo5', 'medicos_tipo6'));
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