<?php

use App\Http\Controllers\DetailTokoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\TambahBarangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
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


// Route::middleware(['auth', 'CekRole:admin'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware(['auth', 'CekRole:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('dashboard');
    Route::get('/search', [DashboardController::class, 'search'])->name('search');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/listBarang/{id}', [ListBarangController::class, 'index'])->name('barang.list');
    Route::get('/list', [ListBarangController::class, 'list'])->name('list');

});
Route::middleware(['auth', 'CekRole:user'])->group(function () {
    Route::get('/dashboarduser', [DashboardController::class, 'detail'])
        ->middleware(['auth', 'verified'])
        ->name('dashboarduser');
// Route::middleware(['auth', 'CekRole:user'])->group(function () {
//     Route::get('/dashboarduser', function () {
//         return view('dashboarduser');
//     })->middleware(['auth', 'verified'])->name('dashboarduser');
    Route::get('/searchuser', [DashboardController::class, 'searchuser'])->name('searchuser');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/detailToko/{id}', [DetailTokoController::class, 'index'])->name('user.DetailToko');
    Route::get('/detail', [DetailTokoController::class, 'detail'])->name('detail');
    // Route::get('/listBarang/{id}', [ListBarangController::class, 'index'])->name('barang.list');
});
// Route::middleware(['auth', ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::get('/listBarang', [ListBarangController::class, 'detail'])->name('barang.list');
// });
// Route::middleware(['auth', ])->group(function () {
//     Route::get('/dasboardtoko', function () {
//         return view('dasboardtoko');
//     })->middleware(['auth', 'verified'])->name('dasboardtoko');
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::get('/tambahBarang', [TambahBarangController::class, 'create'])->name('barang.tambah');
// });
Route::middleware(['auth', 'CekRole:TOKO'])->group(function () {
    Route::get('/dashboardtoko',[BarangController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboardtoko');
    Route::get('/searchtoko', [BarangController::class, 'searchtoko'])->name('searchtoko');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/tambahBarang', [TambahBarangController::class, 'create'])->name('barang.tambah');
    Route::post('/tambahBarang', [TambahBarangController::class, 'store'])->name('barang.store');


    Route::post('/tambah', [BarangController::class, 'store'])->name('tambah');
    
    // Route::post('/tambahBarang', [BarangController::eclass, 'tambah'])->name('tambah');
    Route::get('/detailBarang', [BarangController::class, 'detail'])->name('barang.detail');
    Route::get('/editBarang', [BarangController::class, 'edit'])->name('barang.edit');
    
    
    // Route::get('/editBarang/{nama_barang}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/updateBarang/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/hapusBarang/{id}',[BarangController::class, 'hapus'])->name('barang.hapus');

});
// Route::middleware(['auth', 'CekRole:TOKO'])->group(function () {
//     Route::get('/dashboardtoko', function () {
//         return view('dashboardtoko');
//     })->middleware(['auth', 'verified'])->name('dashboardtoko');
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::get('/tambahBarang', [TambahBarangController::class, 'create'])->name('barang.tambah');
// });

require __DIR__.'/auth.php';
