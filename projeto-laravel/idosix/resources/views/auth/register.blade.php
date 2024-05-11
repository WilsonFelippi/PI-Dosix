@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="div-cadastro">
                <div class="titulo-cadastro">{{ __('Cadastro de Cliente') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('criar') }}">
                        @csrf

                        <div class="row justify-content-between ">
                            <label for="nome" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Nome') }}</label>

                            <div class="col-lg-4">

                                <input id="nome" type="text" class="form-control input-cadastro @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="cpf" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('CPF') }}</label>

                            <div class="col-lg-4">

                                <input id="cpf" type="text" class="form-control input-cadastro " name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus>


                            </div>
                        </div>

                        <div class="row"> <br> </div>

                        <div class="row justify-content-between ">
                            <label for="genero" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Gênero') }}</label>

                            <div class="col-lg-4">

                                <select id="genero"  class="form-control input-cadastro" name="genero"" required  autofocus>
                                    <option value="Masculino">{{__('Masculino')}}</option>
                                    <option value="Feminino">{{__('Feminino')}}</option>
                                    <option value="Outros">{{__('Outros')}}</option>
                                </select>
                            </div>

                            <label for="data_nascimento" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Data de Nascimento') }}</label>

                            <div class="col-lg-4">

                                <input id="data_nascimento" type="date" class="form-control input-cadastro " name="data_nascimento" value="{{ old('data_nascimento') }}" required autocomplete="data_nascimento" autofocus>

                            </div>
                        </div>

                        <div class="row"> <br> </div>

                        <div class="row justify-content-between">
                            <label for="email" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('E-mail') }}</label>
                            <div class="col-lg-4">
                                <input id="email" type="email" class="form-control input-cadastro @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="celular" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Telefone') }}</label>
                            <div class="col-lg-4">

                                <input id="celular" type="text" class="form-control input-cadastro" name="celular" value="{{ old('celular') }}" required autocomplete="celular">

                            </div>
                        </div>

                        <div class="row"> <br> </div>

                        <div class="row justify-content-between">
                            <label for="cep" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('CEP') }}</label>
                            <div class="col-lg-4">

                                <input id="cep" type="text" class="form-control input-cadastro " name="cep" value="{{ old('cep') }}" required autocomplete="cep">

                            </div>

                            <label for="logradouro" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Logradouro') }}</label>
                            <div class="col-lg-4">

                                <input id="logradouro" type="text" class="form-control input-cadastro" name="logradouro" value="{{ old('logradouro') }}" required autocomplete="logradouro">

                            </div>
                        </div>

                        <div class="row"> <br> </div>

                        <div class="row justify-content-start">
                            <label for="numero" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Numero') }}</label>
                            <div class="col-lg-1">

                                <input id="numero" type="text" class="form-control input-cadastro " name="numero" value="{{ old('numero') }}" required autocomplete="numero">

                            </div>

                            <label for="complemento" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Complemento') }}</label>
                            <div class="col-lg-2">

                                <input id="complemento" type="text" class="form-control input-cadastro" name="complemento" value="{{ old('complemento') }}" required autocomplete="complemento">

                            </div>

                            <label for="bairro" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Bairro') }}</label>
                            <div class="col-lg-3">

                                <input id="bairro" type="text" class="form-control input-cadastro" name="bairro" value="{{ old('bairro') }}" required autocomplete="bairro">

                            </div>
                        </div>

                        <div class="row"> <br> </div>

                        <div class="row justify-content-between">
                            <label for="cidade" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Cidade') }}</label>
                            <div class="col-lg-4">

                                <input id="cidade" type="text" class="form-control input-cadastro " name="cidade" value="{{ old('cidade') }}" required autocomplete="cidade">

                            </div>

                            <label for="estado" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Estado') }}</label>
                            <div class="col-lg-4">

                                <input id="estado" type="text" class="form-control input-cadastro" name="estado" value="{{ old('estado') }}" required autocomplete="estado">

                            </div>
                        </div>

                        <div class="row"> <br> </div>

                        <div class="row justify-content-between">
                            <label for="password" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Senha') }}</label>

                            <div class="col-lg-4">
                                <input id="password" type="password" class="form-control input-cadastro @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="password-confirm" class="col-lg-2 col-form-label text-md-end input-texto-cadastro">{{ __('Confirme a senha') }}</label>
                            <div class="col-lg-4">

                                    <input id="password-confirm" type="password" class="form-control input-cadastro" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <input type="hidden" id="crm" name="crm" value="">
                        <input type="hidden" id="id_especialidade" name="id_especialidade" value="">
                        <input type="hidden" id="id_especialidade" name="id_especialidade" value="">
                        <input type="hidden" id="tipo" name="tipo" value="cliente">

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
@endsection
