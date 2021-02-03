<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administracion\HomeController;
use App\Http\Controllers\Libros\LibroController;
use App\Http\Controllers\Editoriales\EditorialController;

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


Route::get('/',[HomeController::class, 'index']);

//=========================================================Rutas Libros

Route::get('libros/registrar',[LibroController::class, 'registro']);
Route::post('libros/registrar',[LibroController::class, 'registrar']);

Route::get('libros/lista',[LibroController::class, 'listalibro']);

Route::get('libros/editar/{id}', [LibroController::class, 'formeditar'])->name('editarLibro');
Route::post('libros/editar/{id}', [LibroController::class, 'editar'])->name('editarLib');

Route::get('libros/eliminar/{id}', [LibroController::class, 'eliminar'])->name('eliminarLibro');

Route::POST('libros/buscar',[LibroController::class, 'buscar']);

//=========================================================Rutas Editoriales
Route::get('editoriales/registrar',[EditorialController::class, 'formregistro']);
Route::post('editoriales/registrar',[EditorialController::class, 'registrar']);

Route::get('editoriales/lista',[EditorialController::class, 'listaedito']);