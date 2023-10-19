<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengurusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard',[HomeController::class, 'dashboard'])->name('dashboard.admin');

// CRUD HOME
Route::get('/admin/home', [HomeController::class, 'index'])->name('index.home');
Route::get('/admin/home/create', [HomeController::class, 'create'])->name('create.home');
Route::post('/admin/home/store', [HomeController::class, 'store'])->name('store.home');
Route::get('/admin/home/edit/{id}', [HomeController::class, 'edit'])->name('edit.home');
Route::put('/admin/home/update/{id}', [HomeController::class, 'update'])->name('update.home');
Route::delete('/admin/home/destroy/{id}', [HomeController::class, 'destroy'])->name('home.destroy');

// CRUD PENGURUS
Route::get('/admin/pengurus', [PengurusController::class, 'index'])->name('index.pengurus');
Route::get('/admin/pengurus/create', [PengurusController::class, 'create'])->name('create.pengurus');
Route::post('/admin/pengurus/store', [PengurusController::class, 'store'])->name('store.pengurus');
Route::get('/admin/pengurus/edit/{id}', [PengurusController::class, 'edit'])->name('edit.pengurus');
Route::put('/admin/pengurus/update/{id}', [PengurusController::class, 'update'])->name('update.pengurus');
Route::delete('/admin/pengurus/destroy/{id}', [PengurusController::class, 'destroy'])->name('pengurus.destroy');

// CRUD GALERI
Route::get('/admin/galeri', [GaleriController::class, 'index'])->name('index.galeri');
Route::get('/admin/galeri/create', [GaleriController::class, 'create'])->name('create.galeri');
Route::post('/admin/galeri/store', [GaleriController::class, 'store'])->name('store.galeri');
Route::get('/admin/galeri/edit/{id}', [GaleriController::class, 'edit'])->name('edit.galeri');
Route::put('/admin/galeri/update/{id}', [GaleriController::class, 'update'])->name('update.galeri');
Route::delete('/admin/galeri/destroy/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

// CRUD ASPIRASI
Route::get('/admin/aspirasi', [AspirasiController::class, 'index'])->name('index.aspirasi');
Route::get('/admin/aspirasi/create', [AspirasiController::class, 'create'])->name('create.aspirasi');
Route::post('/admin/aspirasi/store', [AspirasiController::class, 'store'])->name('store.aspirasi');
Route::get('/admin/aspirasi/show/{id}', [AspirasiController::class, 'show'])->name('show.aspirasi');