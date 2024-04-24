<?php
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicosController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/agendamento', 'App\Http\Controllers\AgendamentoController@abrir')->name('agendamento');
Route::get('/home', 'App\Http\Controllers\HomeController@abrir')->name('home');
Route::get('/servicos', 'App\Http\Controllers\ServicosController@abrir')->name('servicos');


