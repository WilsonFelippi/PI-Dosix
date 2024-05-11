<?php
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\InicialController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\EnsureUserHasRole;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('inicial');
});

Route::get('/agendamento', 'App\Http\Controllers\AgendamentoController@abrir')->name('agendamento');
Route::get('/inicial', 'App\Http\Controllers\InicialController@abrir')->name('inicial');
Route::get('/servicos', 'App\Http\Controllers\ServicosController@abrir')->name('servicos');
Route::get('/cliente/dashboard',[App\Http\Controllers\ClienteController::class, 'index'])->name('dashboard.cliente')->middleware(['auth', 'tipo:cliente']);
Route::get('/admin/dashboard',[App\Http\Controllers\AdminController::class, 'index'])->name('dashboard.admin')->middleware(['auth', 'tipo:admin']);


Route::get('/login',[App\http\Controllers\Auth\LoginController::class,'index'])->name('login');
Route::get('/registro',[App\http\Controllers\Auth\RegisterController::class,'index'])->name('registro');
Route::post('/sucesso',[App\http\Controllers\Auth\RegisterController::class,'create'])->name('criar');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

