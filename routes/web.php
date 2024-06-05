<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
    return view('landingPage.welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/photo', [ProfileController::class, 'updatePhoto'])->name('profile.updatePhoto');


    // halaman awal / dashboard
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // pemasukan
    Route::get('/pemasukan', [App\Http\Controllers\PemasukanController::class, 'index'])->name('daftarPemasukan');
    Route::get('/pemasukan/create', [App\Http\Controllers\PemasukanController::class, 'create'])->name('createPemasukan');
    Route::post('/pemasukan/create', [App\Http\Controllers\PemasukanController::class, 'store'])->name('storePemasukan');
    Route::get('/pemasukan/{id}/edit', [App\Http\Controllers\PemasukanController::class, 'edit'])->name('editPemasukan');
    Route::post('/pemasukan/{id}/edit', [App\Http\Controllers\PemasukanController::class, 'update'])->name('updatePemasukan');
    Route::get('/pemasukan/{id}/delete', [App\Http\Controllers\PemasukanController::class, 'destroy'])->name('deletePemasukan');

    // pengeluaran
    Route::get('/pengeluaran', [App\Http\Controllers\PengeluaranController::class, 'index'])->name('daftarPengeluaran');
    Route::get('/pengeluaran/create', [App\Http\Controllers\PengeluaranController::class, 'create'])->name('createPengeluaran');
    Route::post('/pengeluaran/create', [App\Http\Controllers\PengeluaranController::class, 'store'])->name('storePengeluaran');
    Route::get('/pengeluaran/{id}/edit', [App\Http\Controllers\PengeluaranController::class, 'edit'])->name('editPengeluaran');
    Route::post('/pengeluaran/{id}/edit', [App\Http\Controllers\PengeluaranController::class, 'update'])->name('updatePengeluaran');
    Route::get('/pengeluaran/{id}/delete', [App\Http\Controllers\PengeluaranController::class, 'destroy'])->name('deletePengeluaran');

    // sumber pemasukan
    Route::get('/sumber/pemasukan', [App\Http\Controllers\SumberController::class, 'indexPemasukan'])->name('daftarSumberPemasukan');
    Route::get('/sumber/pemasukan/create', [App\Http\Controllers\SumberController::class, 'createPemasukan'])->name('createSumberPemasukan');
    Route::post('/sumber/pemasukan/create', [App\Http\Controllers\SumberController::class, 'storePemasukan'])->name('storeSumberPemasukan');
    Route::get('/sumber/pemasukan/{id}/edit', [App\Http\Controllers\SumberController::class, 'editPemasukan'])->name('editSumberPemasukan');
    Route::post('/sumber/pemasukan/{id}/edit', [App\Http\Controllers\SumberController::class, 'updatePemasukan'])->name('updateSumberPemasukan');
    Route::get('/sumber/pemasukan/{id}/delete', [App\Http\Controllers\SumberController::class, 'destroyPemasukan'])->name('deleteSumberPemasukan');

    // sumber pengeluaran
    Route::get('/sumber/pengeluaran', [App\Http\Controllers\SumberController::class, 'indexPengeluaran'])->name('daftarSumberPengeluaran');
    Route::get('/sumber/pengeluaran/create', [App\Http\Controllers\SumberController::class, 'createPengeluaran'])->name('createSumberPengeluaran');
    Route::post('/sumber/pengeluaran/create', [App\Http\Controllers\SumberController::class, 'storePengeluaran'])->name('storeSumberPengeluaran');
    Route::get('/sumber/pengeluaran/{id}/edit', [App\Http\Controllers\SumberController::class, 'editPengeluaran'])->name('editSumberPengeluaran');
    Route::post('/sumber/pengeluaran/{id}/edit', [App\Http\Controllers\SumberController::class, 'updatePengeluaran'])->name('updateSumberPengeluaran');
    Route::get('/sumber/pengeluaran/{id}/delete', [App\Http\Controllers\SumberController::class, 'destroyPengeluaran'])->name('deleteSumberPengeluaran');

    // Kryawan
    Route::get('/karyawan', [App\Http\Controllers\KaryawanController::class, 'index'])->name('daftarKaryawan');
    Route::get('/karyawan/create', [App\Http\Controllers\KaryawanController::class, 'create'])->name('createKaryawan');
    Route::post('/karyawan/create', [App\Http\Controllers\KaryawanController::class, 'store'])->name('storeKaryawan');
    Route::get('/karyawan/{id}/edit', [App\Http\Controllers\KaryawanController::class, 'edit'])->name('editKaryawan');
    Route::post('/karyawan/{id}/edit', [App\Http\Controllers\KaryawanController::class, 'update'])->name('updateKaryawan');
    Route::get('/karyawan/{id}/delete', [App\Http\Controllers\KaryawanController::class, 'destroy'])->name('deleteKaryawan');

    // Kredit
    Route::get('/kredit', [App\Http\Controllers\KreditController::class, 'index'])->name('daftarKredit');
    Route::get('/kredit/create', [App\Http\Controllers\KreditController::class, 'create'])->name('createKredit');
    Route::post('/kredit/create', [App\Http\Controllers\KreditController::class, 'store'])->name('storeKredit');
    Route::get('/kredit/{id}/edit', [App\Http\Controllers\KreditController::class, 'edit'])->name('editKredit');
    Route::post('/kredit/{id}/edit', [App\Http\Controllers\KreditController::class, 'update'])->name('updateKredit');
    Route::get('/kredit/{id}/delete', [App\Http\Controllers\KreditController::class, 'destroy'])->name('deleteKredit');
});



require __DIR__ . '/auth.php';
