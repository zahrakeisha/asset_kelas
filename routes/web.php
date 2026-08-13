<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

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

Route::get('/index/kategori', [KategoriController::class, 'index'])->name('kategori.index' );
Route::get('/create/kategori', [KategoriController::class, 'create'])->name('kategori.create' );
Route::post('/store/kategori', [KategoriController::class, 'store'])->name('kategori.store' );
Route::get('/edit/{id}/kategori', [KategoriController::class, 'edit'])->name('kategori.edit' );
Route::post('/update/{id}/kategori', [KategoriController::class, 'update'])->name('kategori.update' );
Route::get('/delete/{id}/kategori', [KategoriController::class, 'destroy'])->name('kategori.destroy' );