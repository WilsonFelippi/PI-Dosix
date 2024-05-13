
@extends('layout.layoutcliente')

@section('content')
<h2 class="titulo-cadastro">Olá, {{Auth::user()->tipo}}!</h2>
<br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-striped align-middle text-center table-text">
                    <thead>
                        <tr>
                        <th >Protocolo</th>
                        <th>Médico</th>
                        <th>Data</th>
                        <th>Forma de pagamento</th>
                        <th>Especialidade</th>
                        <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($agendamentos as $agendamento)
                        <tr>    
                                @php
                                    $id_medico = $agendamento['id_medico'] -1;
                                    $id_especialidade = $medicos[$id_medico]['id_especialidade'];
                                    $especialidade_valor = $especialidades[$id_especialidade - 1]['preco'];
                                    $especialidade_nome = $especialidades[$id_especialidade - 1]['descricao']
                                @endphp
                                <td>{{$agendamento['id']}}</td>
                                <td>{{$medicos[$id_medico]['nome']}}</td>
                                <td>{{$agendamento['data']}}</td>
                                <td>{{$agendamento['forma_pagamento']}}</td>
                                <td>{{$especialidade_nome}}</td>
                                <td>{{'R$'.' '.$especialidade_valor.',00'}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection