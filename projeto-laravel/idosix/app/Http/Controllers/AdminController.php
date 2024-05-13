<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Agendamento;
use App\Models\Especialidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\Flysystem\UrlGeneration\PublicUrlGenerator;
use Illuminate\Support\Facades\View;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user()->id;
        $usuarios = User::all();
        $agendamentos = Agendamento::all();
        $medicos = User::all('nome', 'id_especialidade');
        $especialidades = Especialidades::all();
        return view('dashboardadmin', compact(['agendamentos', 'medicos', 'user', 'especialidades', 'usuarios']));
    }

}
