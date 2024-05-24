<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemasukanController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// pemasukan
Route::get('/pemasukan', [App\Http\Controllers\PemasukanController::class, 'index'])->name('daftarPemasukan');
Route::post('/pemasukan/create', [App\Http\Controllers\PemasukanController::class, 'store'])->name('storePemasukan');
Route::get('/pemasukan/{id}/edit', [App\Http\Controllers\PemasukanController::class, 'edit'])->name('editPemasukan');
Route::post('/pemasukan/{id}/edit', [App\Http\Controllers\PemasukanController::class, 'update'])->name('updatePemasukan');
Route::get('/pemasukan/{id}/delete', [App\Http\Controllers\PemasukanController::class, 'destroy'])->name('deletePemasukan');

// pengeluaran
Route::get('/pengeluaran', [App\Http\Controllers\PengeluaranController::class, 'index'])->name('daftarPengeluaran');
Route::post('/pengeluaran/create', [App\Http\Controllers\PengeluaranController::class, 'store'])->name('storePengeluaran');
Route::get('/pengeluaran/{id}/edit', [App\Http\Controllers\PengeluaranController::class, 'edit'])->name('editPengeluaran');
Route::post('/pengeluaran/{id}/edit', [App\Http\Controllers\PengeluaranController::class, 'update'])->name('updatePengeluaran');
Route::get('/pengeluaran/{id}/delete', [App\Http\Controllers\PengeluaranController::class, 'destroy'])->name('deletePengeluaran');
