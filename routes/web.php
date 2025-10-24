<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/struktur', [HomeController::class, 'struktur'])->name('struktur');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/visi', [HomeController::class, 'visi'])->name('visi');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

use App\Http\Controllers\Site\SiteController;

Route::get('/cek-koneksi', [SiteController::class, 'cekKoneksi'])->name('site.cek-koneksi');

Route::get('/', [SiteController::class, 'index'])->name('site.home');

Route::get('/admin/jenis-hewan', [App\Http\Controllers\Admin\JenisHewanController::class, 'index'])->name('admin.jenis-hewan.index');

Route::get('/admin/pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'index'])->name('admin.pemilik.index');

Route::get('/admin/ras-hewan', [App\Http\Controllers\Admin\RasHewanController::class, 'index'])->name('admin.ras-hewan.index');

use App\Http\Controllers\Admin\KategoriController;

Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('admin.kategori.index');

use App\Http\Controllers\Admin\KategoriKlinisController;

Route::get('/admin/kategori-klinis', [KategoriKlinisController::class, 'index'])->name('admin.kategori-klinis.index');

use App\Http\Controllers\Admin\KodeTindakanTerapiController;

Route::get('/admin/kode-tindakan-terapi', [KodeTindakanTerapiController::class, 'index'])->name('admin.kode-tindakan-terapi.index');

use App\Http\Controllers\Admin\PetController;

Route::get('/admin/pet', [PetController::class, 'index'])->name('admin.pet.index');

use App\Http\Controllers\Admin\RoleController;

Route::get('/admin/role', [RoleController::class, 'index'])->name('admin.role.index');

use App\Http\Controllers\Admin\UserController;

Route::get('/admin/user', [App\Http\Controllers\Admin\UserController::class, 'index'])
    ->name('admin.user.index');
