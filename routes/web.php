<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\MasaEkonomisController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\admin\PengajuanBarangController as AdminPengajuanController;
use App\Http\Controllers\admin\RuanganController;
use App\Http\Controllers\admin\BarangController;
use App\Http\Controllers\siswa\PengajuanBarangController as SiswaPengajuanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
        return view('welcome');
});


// ==================== LOGIN ====================

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');


// ==================== REGISTER ====================

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


// ==================== ADMIN ====================

Route::middleware(['auth', 'role:admin'])
        ->prefix('admin')
        ->name('admin.')
        ->group(function () {

        Route::get('/dashboard', function () {
                return view('admin.dashboard');
                })->name('dashboard');

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


                // Barang
                Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
                Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
                Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
                Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
                Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
                Route::get('/barang/{id}', [BarangController::class, 'show'])->name('barang.show');
                Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');


                // Masa Ekonomis

                Route::get('/masa_ekonomis', [MasaEkonomisController::class, 'index'])
                        ->name('masa_ekonomis.index');

                Route::get('/masa_ekonomis/create', [MasaEkonomisController::class, 'create'])
                        ->name('masa_ekonomis.create');

                Route::get('/masa_ekonomis/{id}/edit', [MasaEkonomisController::class, 'edit'])
                        ->name('masa_ekonomis.edit');

                Route::post('/masa_ekonomis', [MasaEkonomisController::class, 'store'])
                        ->name('masa_ekonomis.store');

                Route::put('/masa_ekonomis/{id}', [MasaEkonomisController::class, 'update'])
                        ->name('masa_ekonomis.update');

                Route::delete('/masa_ekonomis/{id}', [MasaEkonomisController::class, 'destroy'])
                        ->name('masa_ekonomis.destroy');


                // Pengajuan Barang - Admin
                Route::get('/pengajuan-barang', [AdminPengajuanController::class, 'index'])
                        ->name('pengajuan_barang.index');

                Route::get('/pengajuan-barang/{id}', [AdminPengajuanController::class, 'show'])
                        ->name('pengajuan_barang.show');

                Route::get('/pengajuan-barang/{id}/edit', [AdminPengajuanController::class, 'edit'])
                        ->name('pengajuan_barang.edit');

                Route::put('/pengajuan-barang/{id}', [AdminPengajuanController::class, 'update'])
                        ->name('pengajuan_barang.update');

                Route::delete('/pengajuan-barang/{id}', [AdminPengajuanController::class, 'destroy'])
                        ->name('pengajuan_barang.destroy');


                // Ruangan
                Route::get('/index/ruangan', [RuanganController::class, 'index'])
                        ->name('ruangan.index');

                Route::get('/create/ruangan', [RuanganController::class, 'create'])
                        ->name('ruangan.create');

                Route::post('/store/ruangan', [RuanganController::class, 'store'])
                        ->name('ruangan.store');

                Route::get('/show/{id}/ruangan', [RuanganController::class, 'show'])
                        ->name('ruangan.show');

                Route::get('/edit/{id}/ruangan', [RuanganController::class, 'edit'])
                        ->name('ruangan.edit');

                Route::post('/update/{id}/ruangan', [RuanganController::class, 'update'])
                        ->name('ruangan.update');

                Route::get('/delete/{id}/ruangan', [RuanganController::class, 'destroy'])
                        ->name('ruangan.destroy');
        });


// ==================== PETUGAS ====================

Route::middleware(['auth', 'role:petugas'])
        ->prefix('petugas')
        ->name('petugas.')
        ->group(function () {

                // Pengajuan Barang - Petugas
                Route::get('/pengajuan-barang', [AdminPengajuanController::class, 'index'])
                        ->name('pengajuan_barang.index');

                Route::get('/pengajuan-barang/{id}', [AdminPengajuanController::class, 'show'])
                        ->name('pengajuan_barang.show');

                Route::get('/pengajuan-barang/{id}/edit', [AdminPengajuanController::class, 'edit'])
                        ->name('pengajuan_barang.edit');

                Route::put('/pengajuan-barang/{id}', [AdminPengajuanController::class, 'update'])
                        ->name('pengajuan_barang.update');
        });


// ==================== SISWA ====================

Route::middleware(['auth', 'role:siswa'])
        ->prefix('siswa')
        ->name('siswa.')
        ->group(function () {

                // Pengajuan Barang - Siswa
                Route::get('/pengajuan_barang', [SiswaPengajuanController::class, 'index'])
                        ->name('pengajuan_barang.index');

                Route::get('/pengajuan_barang/create', [SiswaPengajuanController::class, 'create'])
                        ->name('pengajuan_barang.create');

                Route::post('/pengajuan_barang', [SiswaPengajuanController::class, 'store'])
                        ->name('pengajuan_barang.store');

                Route::get('/pengajuan_barang/{id}', [SiswaPengajuanController::class, 'show'])
                        ->name('pengajuan_barang.show');
        });
