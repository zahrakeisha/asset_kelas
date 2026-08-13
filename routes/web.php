<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\MasaEkonomisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

        Route::get('/masa_ekonomis', 'MasaEkonomisController@index')->name('masa_ekonomis.index');
        Route::get('/masa_ekonomis/create', 'MasaEkonomisController@create')->name('masa_ekonomis.create');
        Route::post('/masa_ekonomis', 'MasaEkonomisController@store')->name('masa_ekonomis.store');
        Route::get('/masa_ekonomis/{id}/edit', 'MasaEkonomisController@edit')->name('masa_ekonomis.edit');
        Route::put('/masa_ekonomis/{id}', 'MasaEkonomisController@update')->name('masa_ekonomis.update');
        Route::delete('/masa_ekonomis/{id}', 'MasaEkonomisController@destroy')->name('masa_ekonomis.destroy');
