<?php

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

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');


Route::get('/pemasukan', [App\Http\Controllers\PemasukanController::class, 'index'])->name('daftarPemasukan');
Route::post('/pemasukan', [App\Http\Controllers\PemasukanController::class, 'store'])->name('storePemasukan');
Route::post('/pemasukan/{id}', [App\Http\Controllers\PemasukanController::class, 'update'])->name('updatePemasukan');

