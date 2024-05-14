<?php

namespace App\Http\Controllers;

use App\Models\Especialidades;
use Illuminate\Http\Request;

class EspecialidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $especialidades = Especialidades::all();
        return view('cadastroespecialidade', compact('especialidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $especialidade = new Especialidades;

        $especialidade->descricao = $request->descricao;
        $especialidade->preco = $request->preco;

        $especialidade->save();

        return redirect('/admin/dashboard');

    }

    /**
     * Display the specified resource.
     */
    public function show(Especialidades $especialidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Especialidades $especialidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Especialidades $especialidades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Especialidades $especialidades)
    {
        //
    }
}
