<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\MuebleController;

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

Route::get('canciones/{id?}', [PaginaController::class, 'canciones']);

Route::get('contacto', [PaginaController::class, 'contacto']);
Route::post('contacto', [PaginaController::class, 'bautizo']);
Route::get('mueble', [MuebleController::class, 'index']);

//Route::get('producto', [ProductoController::class, 'index']);