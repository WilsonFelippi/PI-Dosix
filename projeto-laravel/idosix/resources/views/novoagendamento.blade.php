@extends('layout.layoutcliente')

@section('content')

<main>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="div-cadastro">
                <div class="titulo-cadastro">{{ __('Novo Agendamento') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('agendamento.salvar') }}">
                        @csrf

                        
                    

                        
                        <div class="row"> <br> </div>

                        <div class="row justify-content-center ">
                            <label for="nome" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Especialidade/Medicos') }}</label>
                            
                            <div class="col-lg-4">
                                
                                <select class="form-control input-cadastro " name="id_medico" id="id_medico" >
                                    
                                    @foreach ($especialidades as $especialidade)

                                    <optgroup id={{$especialidade['descricao']}} label={{$especialidade['descricao']}}>

                                        @foreach ($usuarios as $usuario)

                                            @if ($usuario['id_especialidade'] == $especialidade['id'])
                                                
    
                                                        <option value={{$usuario['id']}}>{{$usuario['nome']}}</option>

                                            @endif

                                        @endforeach
                                        
                                        
                                    </optgroup>
                                    @endforeach

                                </select>

                            </div>
                        </div>

                        
                        <div class="row"> <br> </div>

                        <div class="row justify-content-center ">
                            <label for="data" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Data') }}</label>
                            
                            <div class="col-lg-4">
                                
                                <input type="date" class="form-control input-cadastro " id="data" name="data">

                            </div>
                        </div>
                        <div class="row"> <br> </div>
                        <div class="row justify-content-center ">
                            <label for="forma_pagamento" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Forma de Pagamento') }}</label>
                            
                            <div class="col-lg-4">
                                
                                <select name="forma_pagamento" id="forma_pagamento" class="form-control input-cadastro">

                                    <option value="Convênio">Convênio</option>
                                    <option value="Pix">Pix</option>
                                    <option value="Cartão de Crédito">Cartão de Crédito</option>

                                </select>

                            </div>
                        </div>
                        <input type="hidden" id="id_cliente" name="id_cliente" value={{Auth::user()->id}}>
                        <div class="row"> <br> </div>
                        <div class="row"> <br> </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-3">
                                <button type="submit" class="btn btn-primary btn-cadastrar">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

@endsection