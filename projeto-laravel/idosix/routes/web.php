<?php
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\InicialController;
use App\Http\Controllers\ServicosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Facade;


Route::get('/', function () {
    return view('inicial');
});

Route::get('/agendamento', 'App\Http\Controllers\AgendamentoController@abrir')->name('agendamento');
Route::get('/inicial', 'App\Http\Controllers\InicialController@abrir')->name('inicial');
Route::get('/servicos', 'App\Http\Controllers\ServicosController@abrir')->name('servicos');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

