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

Route::get('/', [PageController::class, 'index'])->name('gen1.homepage');

Route::get('/gen1/{name}', [PageController::class, 'showGen1'])->name('gen1.show');
Route::get('/gen2/{name}', [PageController::class, 'showGen2'])->name('gen2.show');
Route::get('/gen3/{name}', [PageController::class, 'showGen2'])->name('gen3.show');
