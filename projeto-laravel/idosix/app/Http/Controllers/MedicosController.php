<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Agendamento;
use App\Models\Especialidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use League\Flysystem\UrlGeneration\PublicUrlGenerator;

class MedicosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $user = Auth::user()->id;
            $agendamentos = Agendamento::where('id_medico', $user)->get();
            $clientes = User::all('nome', 'celular');
            $medicos = User::all('nome', 'id_especialidade');
            $especialidades = Especialidades::all();
            return view('dashboardmedico', compact(['agendamentos', 'clientes', 'user', 'especialidades', 'medicos']));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $count = User::count();
        $medicos = User::where('tipo', '=', 'medico')->get();
        $especialidades = Especialidades::all();
        return view('novomedico', compact(['especialidades', 'medicos', 'count']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $medico = new User;
        $medico->nome = $request->nome;
        $medico->cpf = $request->cpf;
        $medico->crm = $request->crm;
        $medico->genero = $request->genero;
        $medico->data_nascimento = $request->data_nascimento;
        $medico->celular = $request->celular;
        $medico->logradouro = $request->logradouro;
        $medico->numero = $request->numero;
        $medico->complemento = $request->complemento;
        $medico->bairro = $request->bairro;
        $medico->cidade = $request->cidade;
        $medico->estado = $request->estado;
        $medico->cep = $request->cep;
        $medico->email = $request->email;
        $medico->password = Hash::make($request->password);
        $medico->tipo = $request->tipo;
        $medico->id_especialidade = $request->id_especialidade;

        $medico->save();

        return redirect('/admin/medicos');
    }

    /**
     * Display the specified resource.
     */
  
}
