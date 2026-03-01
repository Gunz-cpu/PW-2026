<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Master\barangController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/latihan', function () {
    return view('latihan');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//barang
Route::prefix('/barang')->group(function () {
    Route::get('/', [barangController::class, 'index'])->name('index.barang');
    Route::get('/create', [barangController::class, 'create'])->name('create.barang');
    Route::post('/store', [barangController::class, 'store'])->name('store.barang');
    Route::get('/edit/{uuid}', [barangController::class, 'edit'])->name('edit.barang');
    Route::post('/update/{uuid}', [barangController::class, 'update'])->name('update.barang');
    Route::get('/delete/{uuid}', [barangController::class, 'delete'])->name('delete.barang');
});


