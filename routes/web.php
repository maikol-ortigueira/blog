<?php

use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EtiquetaController;
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

// Ruta de inicio
Route::get('/', function () { return view('welcome');})->name('home');

// Rutas para el blog
// El middleware se gestiona directamente en el controlador ArtigoController
// @see https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller
// para ver como se generan automáticamente las urls asociadas al controlador ArtigoController
Route::resource('artigos', ArtigoController::class);

// Rutas para etiquetas
Route::resource('etiquetas', EtiquetaController::class);

// Rutas del formulario de contacto
Route::get('contacto', [ContactController::class, 'index'])->name('contacto');
Route::put('contacto', [ContactController::class, 'store'])->name('contacto.store');

// Rutas para mayores de 18 años
Route::middleware('mayor.edad')->get('/mayores', function() {
    return view('es-mayor');
})->name('es-mayor');

Route::get('/pedir-edad', function() {
    return view('pedir-edad');
})->name('filtro.edad');

// Ruta no autorizado (se muestra si el usuario no es mayor de 18 años)
Route::get('no-autorizado', function () {
    return view('no-autorizado');
})->name('no-autorizado');

// Ruta usuarios registrados
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

