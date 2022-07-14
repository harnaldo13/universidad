<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\ImparteController;
use App\Http\Controllers\RelacionController;

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
    return view('/Home');
});

/* Home */

Route::get('/Home',[HomeController::class, 'Index']);

/* Rutas de CRUD */

Route::resource('clases','ClaseController');
Route::resource('aulas','AulaController');
Route::resource('profesors','ProfesorController');
Route::resource('impartes','ImparteController');

/* Relaciones */
Route::get('Home/Tablas/Relacion/Profesores/{profesor}', [RelacionController::class, 'Relacion_profesor'])->name('Tablas.Relacion_Profesor');
Route::get('Home/Tablas/Relacion/Aulas/{aula}', [RelacionController::class, 'Relacion_aula'])->name('Tablas.Relacion_Aula');
Route::get('Home/Tablas/Relacion/Clases/{clase}', [RelacionController::class, 'Relacion_clase'])->name('Tablas.Relacion_Clase');

/* Busquedas */

Route::post('aulas/nombre/{nombre}',[AulaController::class,'buscarPorNombre'])->name('Busqueda.Aula');
Route::post('clases/nombre/{nombre}',[ClaseController::class,'buscarPorNombre'])->name('Busqueda.Clase');
Route::post('profesors/nombre/{nombre}',[ProfesorController::class,'buscarPorNombre'])->name('Busqueda.Profesor');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
