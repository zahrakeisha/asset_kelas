<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\MasaEkonomisController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
<<<<<<< Updated upstream
use App\Http\Controllers\admin\PengajuanBarangController;
=======
use App\Http\Controllers\PengajuanBarangController;
>>>>>>> Stashed changes
use App\Http\Controllers\admin\RuanganController;

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

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

// Register
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {

        // User
        Route::get('/user', [UserController::class, 'index'])->name('users.index');
        Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/user', [UserController::class, 'store'])->name('users.store');
        Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/user/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('users.destroy');

        // Kategori
        Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
        Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
        Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
        Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
        Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
        Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

        // masa ekonomis
        Route::get('/masa_ekonomis', [MasaEkonomisController::class, 'index'])->name('masa_ekonomis.index');
        Route::get('/masa_ekonomis/create', [MasaEkonomisController::class, 'create'])->name('masa_ekonomis.create');
        Route::post('/masa_ekonomis', [MasaEkonomisController::class, 'store'])->name('masa_ekonomis.store');
        Route::put('/masa_ekonomis/{id}', [MasaEkonomisController::class, 'update'])->name('masa_ekonomis.update');
        Route::get('/masa_ekonomis/{id}/edit', [MasaEkonomisController::class, 'edit'])->name('masa_ekonomis.edit');
        Route::delete('/masa_ekonomis/{id}', [MasaEkonomisController::class, 'destroy'])->name('masa_ekonomis.destroy');

        // pengajuan barang
        Route::get('/pengajuan-barang', [PengajuanBarangController::class, 'index'])->name('pengajuan_barang.index');
        Route::get('/pengajuan-barang/{id}', [PengajuanBarangController::class, 'show'])->name('pengajuan_barang.show');
        Route::get('/pengajuan-barang/{id}/edit', [PengajuanBarangController::class, 'edit'])->name('pengajuan_barang.edit');
        Route::put('/pengajuan-barang/{id}', [PengajuanBarangController::class, 'update'])->name('pengajuan_barang.update');
        Route::delete('/pengajuan-barang/{id}', [PengajuanBarangController::class, 'destroy'])->name('pengajuan_barang.destroy');

        Route::get('/index/ruangan', [RuanganController::class, 'index'])->name('ruangan.index');
        Route::get('/create/ruangan', [RuanganController::class, 'create'])->name('ruangan.create');
        Route::post('/store/ruangan', [RuanganController::class, 'store'])->name('ruangan.store');
        Route::get('/show/{id}/ruangan', [RuanganController::class, 'show'])->name('ruangan.show');
        Route::get('/edit/{id}/ruangan', [RuanganController::class, 'edit'])->name('ruangan.edit');
        Route::post('/update/{id}/ruangan', [RuanganController::class, 'update'])->name('ruangan.update');
        Route::get('/delete/{id}/ruangan', [RuanganController::class, 'destroy'])->name('ruangan.destroy');

    });

Route::middleware(['auth', 'role:petugas'])->prefix('petugas')->name('petugas.')->group(function () {

        // pengajuan barang
        Route::get('/pengajuan-barang', [PengajuanBarangController::class, 'index'])->name('petugas.pengajuan_barang.index');
        Route::get('/pengajuan-barang/{id}', [PengajuanBarangController::class, 'show'])->name('petugas.pengajuan_barang.show');
        Route::get('/pengajuan-barang/{id}/edit', [PengajuanBarangController::class, 'edit'])->name('petugas.pengajuan_barang.edit');
        Route::put('/pengajuan-barang/{id}', [PengajuanBarangController::class, 'update'])->name('petugas.pengajuan_barang.update');
});

Route::middleware(['auth', 'role:siswa'])->prefix('siswa')->name('siswa.')->group(function () {

        // pengajuan barang
        Route::get('/pengajuan_barang', [PengajuanBarangController::class, 'index'])->name('pengajuan_barang.index');
        Route::get('/pengajuan_barang/create', [PengajuanBarangController::class, 'create'])->name('pengajuan_barang.create');
        Route::post('/pengajuan_barang', [PengajuanBarangController::class, 'store'])->name('pengajuan_barang.store');
        Route::get('/pengajuan_barang/{id}', [PengajuanBarangController::class, 'show'])->name('pengajuan_barang.show');
});
