<?php

use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\ContactController;
use App\Models\Artigo;
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
Route::get('/blog', [ArtigoController::class, 'index'])->name('blog');
// Ver un artículo
Route::get('/artigo/{artigo}', [ArtigoController::class, 'show'])->name('article');

// Crear un artículo
Route::get('/artigo/engadir', [ArtigoController::class, 'create'])->name('article-create');
Route::put('/artigo/engadir/{artigo}', [ArtigoController::class, 'store'])->name('article-store');

// Editar un artículo
Route::get('/artigo/editar/{artigo}', [ArtigoController::class, 'edit'])->name('article-edit');
Route::put('/artigo/editar/{artigo}', [ArtigoController::class, 'update'])->name('article-update');

// Eliminar un artículo
Route::delete('/artigo/borrar/{artigo}', [ArtigoController::class, 'destroy'])->name('article-destroy');

// Rutas del formulario de contacto
Route::get('/contacto', [ContactController::class, 'index'])->name('contacto');
Route::put('/contacto', [ContactController::class, 'store'])->name('contacto.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
