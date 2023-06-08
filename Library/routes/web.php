<?php

use App\Http\Controllers\AuthorController;
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

Route::get('/', [PageController::class, 'index'])->name('books.home');
Route::get('/libri/crea', [PageController::class, 'create'])->name('books.create');
Route::post('/libri/salva', [PageController::class, 'store'])->name('books.store');
Route::get('/libri/{book}/dettagli', [PageController::class, 'show'])->name('books.show');
Route::get('/libri/{book}/modifica', [PageController::class, 'edit'])->name('books.edit');
Route::put('/libri/{book}/edit', [PageController::class, 'update'])->name('books.update');
Route::delete('/libri/{book}', [PageController::class, 'destroy'])->name('books.destroy');

//rotte categorie

Route::get('/categorie', [CategoryController::class, 'index'])->name('category.home');
Route::get('/categorie/crea', [CategoryController::class, 'create'])->name('category.create');
Route::post('/categorie/salva', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categorie/{category}/dettagli', [CategoryController::class, 'show'])->name('category.show');
Route::get('/categorie/{category}/modifica', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/categorie/{category}/edit', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/categorie/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

//rotte autore

Route::resource('author', AuthorController::class);



