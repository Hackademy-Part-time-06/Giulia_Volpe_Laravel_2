<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/libri', [PageController::class, 'index'])->name('books.home');
Route::get('/libri/crea', [PageController::class, 'create'])->name('books.create');
Route::post('/libri/salva', [PageController::class, 'store'])->name('books.store');
Route::get('/libri/{book}/dettagli', [PageController::class, 'show'])->name('books.show');


