<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/features', [PagesController::class, 'fitur'])->name('pages.fitur');
Route::get('/upload', [PagesController::class, 'upload'])->name('pages.upload');
Route::get('/contact', [PagesController::class, 'kontak'])->name('pages.kontak');
Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('pages.dashboard');

Route::get('/dashboard', [ProdukController::class, 'index'])->name('dashboard');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.delete');

Route::get('/dashboard', [ProdukController::class, 'index'])->name('dashboard');

// Routes for editing and deleting products
Route::resource('produk', ProdukController::class);
