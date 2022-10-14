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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',[HomeController::class, 'mostrar'])->name('home');
Route::get('/cadastrarMoto',[MotoController::class, 'FormularioCadastro']);
Route::get('/listarMoto',[MotoController::class, 'mostrarLista']);
Route::post('/cadastrarMoto', [MotoController::class, 'SalvarBanco'])->name('salvar-banco');