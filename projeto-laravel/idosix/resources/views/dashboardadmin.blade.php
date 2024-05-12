@extends('layout.layoutadmin')

@section('content')
    <h1> Dashboard Admin </h1>
    <h2> {{Auth::user()->tipo}}</h2>
    <div class="container div-cadastro">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-striped align-middle text-center">
                    <thead class="table-text">
                        <tr>
                        <th >Protocolo</th>
                        <th>Cliente</th>
                        <th>Médico</th>
                        <th>Data</th>
                        <th>Forma de pagamento</th>
                        <th>Especialidade</th>
                        <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody class="table-text">
                    @foreach ($agendamentos as $agendamento)
                        <tr>    
                                @php
                                    $id_medico = $agendamento['id_medico'] -1;
                                    $id_especialidade = $medicos[$id_medico]['id_especialidade'];
                                    $especialidade_valor = $especialidades[$id_especialidade - 1]['preco'];
                                    $especialidade_nome = $especialidades[$id_especialidade - 1]['descricao'];
                                    $id_cliente = $agendamento['id_cliente'];
                                    $nome_cliente = $usuarios[$id_cliente - 1]['nome'];
                                @endphp
                                <td>{{$agendamento['id']}}</td>
                                <td>{{$nome_cliente}}</td>
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