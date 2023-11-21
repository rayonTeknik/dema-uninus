<?php

use App\Http\Controllers\Admin\CategoryPostController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\frontend\PostController;
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
    return "Dema Uninus";
});


Route::get('/post',[PostController::class, 'index']);




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

// CRUD BEASISWA
Route::get('/admin/beasiswa', [BeasiswaController::class, 'index'])->name('index.beasiswa');
Route::get('/admin/beasiswa/create', [BeasiswaController::class, 'create'])->name('create.beasiswa');
Route::post('/admin/beasiswa/store', [BeasiswaController::class, 'store'])->name('store.beasiswa');
Route::get('/admin/beasiswa/show/{id}', [BeasiswaController::class, 'show'])->name('show.beasiswa');
Route::get('/admin/beasiswa/edit/{id}', [BeasiswaController::class, 'edit'])->name('edit.beasiswa');
Route::put('/admin/beasiswa/update/{id}', [BeasiswaController::class, 'update'])->name('update.beasiswa');
Route::delete('/admin/beasiswa/destroy/{id}', [BeasiswaController::class, 'destroy'])->name('beasiswa.destroy');

// CRUD CATEGORY BLOG ADMIN
Route::get('/admin/category', [CategoryPostController::class, 'index'])->name('index.categoryPost');
Route::get('/admin/category/create', [CategoryPostController::class, 'create'])->name('create.categoryPost');
Route::post('/admin/category/store', [CategoryPostController::class, 'store'])->name('store.categoryPost');
Route::get('/admin/category/show/{id}', [CategoryPostController::class, 'show'])->name('show.categoryPost');
Route::get('/admin/category/edit/{id}', [CategoryPostController::class, 'edit'])->name('edit.categoryPost');
Route::put('/admin/category/update/{id}', [CategoryPostController::class, 'update'])->name('update.categoryPost');
Route::delete('/admin/category/destroy/{id}', [CategoryPostController::class, 'destroy'])->name('categoryPost.destroy');

// CRUD POST BLOG ADMIN
Route::get('/admin/post', [AdminPostController::class, 'index'])->name('index.post');
Route::get('/admin/post/create', [AdminPostController::class, 'create'])->name('create.post');
Route::post('/admin/post/store', [AdminPostController::class, 'store'])->name('store.post');
Route::get('/admin/post/show/{id}', [AdminPostController::class, 'show'])->name('show.post');
Route::get('/admin/post/edit/{id}', [AdminPostController::class, 'edit'])->name('edit.post');
Route::put('/admin/post/update/{id}', [AdminPostController::class, 'update'])->name('update.post');
Route::delete('/admin/post/destroy/{id}', [AdminPostController::class, 'destroy'])->name('post.destroy');