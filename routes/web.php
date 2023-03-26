<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersNController;
use App\Http\Controllers\loginController;
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
Route::resource('validar',loginController::class);
Route::resource('logout',loginController::class);
Route::resource('registro',UsersNController::class);
//------------------------//
//Route::resource('registros',registerUController::class);
//Route::resource('cliente',TbClientesController::class);
//Route::resource('medicamentos',tb_medicamentos::class);
//Route::resource('tratamiento',TbTratamientosController::class);
//Route::resource('cuidador',TbCuidadoresController::class);
