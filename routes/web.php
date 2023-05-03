<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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
    return view('welcome');
});

// Get Buku
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');

Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku/create', [BukuController::class, 'store'])->name('buku.store');

Route::get('/buku{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::post('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');
