<?php

  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\motoController; 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class, 'mostrar'])->name('home');
Route::get('/home',[HomeController::class, 'mostrar'])->name('home');
Route::get('/cadastrarMoto',[MotoController::class, 'FormularioCadastro'])->name('cadastrarMoto');
Route::get('/listarMoto',[MotoController::class, 'mostrarLista'])->name('listarMoto');
Route::post('/cadastrarMoto', [MotoController::class, 'SalvarBanco'])->name('salvar-banco');

Route::get('/editar/{id}',[motoController::class, 'edit']);

Route::delete('/editar/{id}',[motoController::class, 'destroy']);

Route::put('/editar/{id}', [motoController::class, 'update']);