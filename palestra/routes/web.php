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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PageController::class, 'index'])->name('homepage');
Route::get('/i-nostri-corsi', [PageController::class, 'corsi'])->name('courses');
Route::get('/form-contatti', [PageController::class, 'contatti'])->name('contacts');
Route::get('/dettagli/{ref}', )->name('detail');