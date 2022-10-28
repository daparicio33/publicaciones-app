<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PublicacioneController;
use App\Http\Controllers\ComentarioController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [InicioController::class, 'index']);

/* Rutas de usuarios */

Route::get('usuarios/', [UsuarioController::class, 'index']);
Route::get('usuarios/create', [UsuarioController::class, 'create']);
Route::post('usuarios/', [UsuarioController::class, 'store']);
Route::get('usuarios/{id}/edit', [UsuarioController::class, 'edit']);
Route::put('usuarios/{id}', [UsuarioController::class, 'update']);
Route::delete('usuarios/{id}', [UsuarioController::class, 'delete']);

/* Rutas de publicaciones */

Route::get('publicaciones/', [PublicacioneController::class, 'index']);
Route::get('publicaciones/create', PublicacioneController::class, 'create');
Route::post('publicaciones/', [PublicacioneController::class, 'store']);
Route::get('publicaciones/{id}/edit', [PublicacioneController::class, 'edit']);
Route::put('publicaciones/{id}', [PublicacioneController::class, 'update']);
Route::delete('publicaciones/{id}', [PublicacioneController::class, 'delete']);

/* Rutas de comentarios */

Route::get('comentarios/', [ComentarioController::class, 'index']);
Route::get('comentarios/create', [ComentarioController::class, 'create']);
Route::post('comentarios/', [ComentarioController::class, 'store']);
Route::get('comentarios/{id}/edit', [ComentarioController::class, 'edit']);
Route::put('comentarios/{id}', [ComentarioController::class, 'update']);
Route::delete('comentarios/{id}', [ComentarioController::class, 'delete']);

