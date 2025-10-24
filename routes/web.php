<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PemasokController;
use Illuminate\Support\Facades\Route;

Route::get('/1', function () {
    return view('formBarang');
});


Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.form');
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/{id}', [BarangController::class, 'show'])->name('barang.show');
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/delete/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.form');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}', [KategoriController::class, 'show'])->name('kategori.show');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

Route::get('/pemasok', [PemasokController::class, 'index'])->name('pemasok.index');
Route::get('/pemasok/create', [PemasokController::class, 'create'])->name('pemasok.form');
Route::post('/pemasok', [PemasokController::class, 'store'])->name('pemasok.store');
Route::get('/pemasok/{id}', [PemasokController::class, 'show'])->name('pemasok.show');
Route::get('/pemasok/edit/{id}', [PemasokController::class, 'edit'])->name('pemasok.edit');
Route::put('/pemasok/{id}', [PemasokController::class, 'update'])->name('pemasok.update');
Route::delete('/pemasok/delete/{id}', [PemasokController::class, 'destroy'])->name('pemasok.destroy');
