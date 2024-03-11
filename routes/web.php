<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CholloController;

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

// Rutas de los Chollos

Route::get('/chollos', [CholloController::class, 'index'])->name('chollos.index');
Route::get('/chollos/create', [CholloController::class, 'create'])->name('chollos.create');
Route::post('/chollos', [CholloController::class, 'store'])->name('chollos.store');
Route::get('/chollos/{chollo}/edit', [CholloController::class, 'edit'])->name('chollos.edit');


Route::get('/chollos/destacados', [CholloController::class, 'destacados'])->name('chollos.destacados');


Route::put('/chollos/{chollo}', [CholloController::class, 'update'])->name('chollos.update');

Route::get('/chollos/{chollo}', [CholloController::class, 'show'])->name('chollos.show');


Route::delete('/chollos/{chollo}', [CholloController::class, 'destroy'])->name('chollos.destroy');
// Ruta principal
Route::get('/', function () {
    return view('index');
});
