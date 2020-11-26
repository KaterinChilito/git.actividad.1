<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\materiaController;

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

Route::get('/Katerin Chilito', function(){
    return view('datosaprendiz');
});

Route::get('/estudiantes', function(){
    return view('estudiantes');
});

Route::get('/producto', function(){
    return view('producto');
});
Route::get('/materias', function(){
    return view('materias');
});


Route::get('/plantilla', [VistaController::class, 'plantillaweb']);
Route::get('/cliente', [ClienteController::class, 'Cliente'])->name('verCliente');
Route::get('/pedidos', [PedidosController::class, 'pedidos'])->name('verPedidos');
Route::get('/productos', [ProductosController::class, 'productos'])->name('verProductos');

Route::get('/', function () {
    return view('welcome');
});
