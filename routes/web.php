<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\KategoriController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {

        // User
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user', [UserController::class, 'store'])->name('user.store');
        Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

        // Kategori
        Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
        Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
        Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
        Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
        Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
        Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
    });