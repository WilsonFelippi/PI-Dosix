<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Agendamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\Flysystem\UrlGeneration\PublicUrlGenerator;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user()->id;
        $agendamentos = Agendamento::where('id_cliente', $user)->get();
        $medicos = User::all('nome');

        return view('dashboardcliente', compact(['agendamentos', 'medicos', 'user']));
    }

    public function store(Request $request) {
        $user = User::create($request->all());
    }

}