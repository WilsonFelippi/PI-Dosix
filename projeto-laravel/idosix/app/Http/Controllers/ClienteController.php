<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Agendamento;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> c0e8bff68630249c37dc209f8a8966175a0eda46
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
    public function store(Request $request) {
        $user = User::create($request->all());
    }
}
