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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/fotos', [App\Http\Controllers\FotoController::class, 'index'])->name('fotos');
Route::get('/foto/{ruta}', [App\Http\Controllers\FotoController::class, 'mostrarfoto']);
Route::post('/subirFoto', [App\Http\Controllers\FotoController::class, 'subirFoto'])->name('subirFoto');
Route::post('/eliminarFoto', [App\Http\Controllers\FotoController::class, 'eliminarFoto'])->name('eliminarFoto');
Route::post('/subirComentario', [App\Http\Controllers\FotoController::class, 'subirComentario'])->name('subirComentario');


Route::get('/ja', function () {
    return view('foto');
});