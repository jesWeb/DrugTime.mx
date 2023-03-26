<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersNController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\TratamientoController;
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
//routs utilizables
//-----------LOGIN-and Register------------//
Route::resource('login',loginController::class);
Route::name('validar')->get('validar',[loginController::class,'validar']);
Route::name('logout')->get('logout',[loginController::class,'logout']);
Route::resource('registro',UsersNController::class);
//------------vistas generales ------------//
Route::resource('cliente',ClientesController::class);
Route::resource('cuidador',cuidadorController::class);
Route::resource('medicamento',MedicamentoController::class);
Route::resource('tratamiento',TratamientoController::class);

//Route::resource('registros',registerUController::class);
//Route::resource('medicamentos',tb_medicamentos::class);
//Route::resource('tratamiento',TbTratamientosController::class);
//Route::resource('cuidador',TbCuidadoresController::class);
