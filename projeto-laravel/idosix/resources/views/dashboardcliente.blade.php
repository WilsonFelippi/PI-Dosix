
@extends('layout.layoutcliente')

@section('content')
    <h1>Dashboard do {{Auth::User()->email}} </h1>
    {{$medicos[2]}}
    <div class="container div-cadastro">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th >Protocolo</th>
                        <th>Médico</th>
                        <th>Data</th>
                        <th>Forma de pagamento</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($agendamentos as $agendamento)
                        <tr>    
                                @php
                                    $id_medico = $agendamento['id_medico'];
                                @endphp
                                <td>{{$agendamento['id']}}</td>
                                <td>{{$medicos[$id_medico -1 ]['nome']}}</td>
                                <td>{{$agendamento['data']}}</td>
                                <td>{{$agendamento['forma_pagamento']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection