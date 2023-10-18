<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// CRUD HADIAH
Route::get('/admin/home', [HomeController::class, 'index'])->name('index.home');
Route::get('/admin/home/create', [HomeController::class, 'create'])->name('create.home');
Route::post('/admin/home/store', [HomeController::class, 'store'])->name('store.home');
Route::get('/admin/home/edit/{id}', [HomeController::class, 'edit'])->name('edit.home');
Route::put('/admin/home/update/{id}', [HomeController::class, 'update'])->name('update.home');
Route::delete('/admin/home/destroy/{id}', [HomeController::class, 'destroy'])->name('home.destroy');