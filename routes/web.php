<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PemasokController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('barang')->group(function () {
        Route::get('/', [BarangController::class, 'index'])->name('barang.index');
        Route::get('/create', [BarangController::class, 'create'])->name('barang.form');
        Route::post('/store', [BarangController::class, 'store'])->name('barang.store');
        Route::get('/{id}', [BarangController::class, 'show'])->name('barang.show');
        Route::get('/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
        Route::put('/{id}', [BarangController::class, 'update'])->name('barang.update');
        Route::delete('/delete/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
    });

    Route::prefix('kategori')->group(function () {
        Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
        Route::get('/create', [KategoriController::class, 'create'])->name('kategori.form');
        Route::post('/store', [KategoriController::class, 'store'])->name('kategori.store');
        Route::get('/{id}', [KategoriController::class, 'show'])->name('kategori.show');
        Route::get('/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
        Route::put('/{id}', [KategoriController::class, 'update'])->name('kategori.update');
        Route::delete('/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
    });

    Route::prefix('pemasok')->group(function () {
        Route::get('/', [PemasokController::class, 'index'])->name('pemasok.index');
        Route::get('/create', [PemasokController::class, 'create'])->name('pemasok.form');
        Route::post('/store', [PemasokController::class, 'store'])->name('pemasok.store');
        Route::get('/{id}', [PemasokController::class, 'show'])->name('pemasok.show');
        Route::get('/edit/{id}', [PemasokController::class, 'edit'])->name('pemasok.edit');
        Route::put('/{id}', [PemasokController::class, 'update'])->name('pemasok.update');
        Route::delete('/delete/{id}', [PemasokController::class, 'destroy'])->name('pemasok.destroy');
    });
});


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



require __DIR__ . '/auth.php';
