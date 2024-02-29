<?php

use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfileController;
use App\Http\Controllers\ListaRepController;
use App\Http\Controllers\TipoVideoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Perfil', function () {
    return view('perfile.perfil');
});
Route::get('/Home', function () {
    return view('pixicinema');
});
Route::get('/Peliculas', function () {
    return view('pelicula.pelicula');
});
Route::get('/Series', function () {
    return view('series.series');
});

Route::resource('pelicula', PeliculaController::class);

Route::resource('perfiles', PerfileController::class);

Route::resource('lista', ListaRepController::class);

Route::resource('Tipo', TipoVideoController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

