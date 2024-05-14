@extends('layout.layoutadmin')

@section('content')

<main>
    <div class="titulo-cadastro">{{ __('Especialidades') }}</div>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-striped align-middle text-center table-text">
                    <thead class="">
                        <tr>
                        <th>ID</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody class="">
                    @foreach ($especialidades as $especialidade)
                        <tr>    
                            <td>{{$especialidade['id']}}</td>
                            <td>{{$especialidade['descricao']}}</td>
                            <td>{{'R$ '.$especialidade['preco'].',00'}}</td>
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="div-cadastro">
                <div class="titulo-cadastro">{{ __('Nova Especialidade') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('especialidade.salvar') }}">
                        @csrf
                        
                        <div class="row"> <br> </div>

                        <div class="row justify-content-center ">
                            <label for="descricao" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Nome da Especialidade') }}</label>
                            
                            <div class="col-lg-4">
                                
                                <input type="text" class="form-control input-cadastro " name="descricao" id="descricao" >
                                    
                            </div>
                        </div>

                        
                        <div class="row"> <br> </div>

                        <div class="row justify-content-center ">
                            <label for="preco" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Valor') }}</label>
                            
                            <div class="col-lg-4">
                                
                                <input type="text" class="form-control input-cadastro " id="preco" name="preco">

                            </div>
                        </div>
                        
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