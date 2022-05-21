<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

use App\Http\Controllers\PagesController;
Route::get('/', [PagesController::class, 'rotaInicial']);

use App\Http\Controllers\ClientesController;
Route::get('/cliente/novo', [ClientesController::class, 'create']);
Route::post('/cliente/novo', [ClientesController::class, 'store'])->name('registrar_cliente');
Route::get('/cliente/excluir/{id}', [ClientesController::class, 'delete']);
Route::post('/cliente/excluir/{id}', [ClientesController::class, 'destroy'])->name('excluir_cliente');
Route::get('/cliente/show', [ClientesController::class, 'show']);
Route::get('/cliente/search', [ClientesController::class, 'search']);
Route::post('/cliente/search', [ClientesController::class, 'searched'])->name('procurar_cliente');


/*
Route::get('/cliente/ver/{id}', [ClientesController::class, 'show']);
Route::get('/cliente/editar/{id}', [ClientesController::class, 'editar']);
Route::post('/cliente/editar/{id}', [ClientesController::class, 'update'])->name('alterar_vendedor');
Route::get('/cliente/excluir/{id}', [ClientesController::class, 'delete']);
Route::post('/cliente/excluir/{id}', [ClientesController::class, 'destroy'])->name('excluir_cliente');*/