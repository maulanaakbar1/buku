<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KategoriController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('buku', BukuController::class);
    Route::resource('kategori', KategoriController::class);
});