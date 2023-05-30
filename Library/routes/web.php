<?php

use App\Http\Controllers\CategoryController;
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

//rotte libri

Route::get('/libri', [PageController::class, 'index'])->name('books.home');
Route::get('/libri/crea', [PageController::class, 'create'])->name('books.create');
Route::post('/libri/salva', [PageController::class, 'store'])->name('books.store');
Route::get('/libri/{book}/dettagli', [PageController::class, 'show'])->name('books.show');

//rotte categorie

Route::get('/categorie', [CategoryController::class, 'index'])->name('category.home');
Route::get('/categorie/crea', [CategoryController::class, 'create'])->name('category.create');
Route::post('/categorie/salva', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categorie/{category}/dettagli', [CategoryController::class, 'show'])->name('category.show');



