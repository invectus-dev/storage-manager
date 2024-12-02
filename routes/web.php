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

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');

Route::get('/dashboard', [ProdukController::class, 'index'])->name('dashboard');
