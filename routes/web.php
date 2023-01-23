<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\Userontroller;
use App\Http\Controllers\PeminjamanRuanganController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('Admin/add', [AdminController::class, 'create'])->name('admin.create');
Route::post('Admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('Admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('Admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::post('Admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

Route::get('Jadwal/add', [JadwalController::class, 'create'])->name('jadwal.create');
Route::post('Jadwal/store', [JadwalController::class, 'store'])->name('jadwal.store');
Route::get('Jadwal/edit/{id}', [JadwalController::class, 'edit'])->name('jadwal.edit');
Route::post('Jadwal/update/{id}', [JadwalController::class, 'update'])->name('jadwal.update');
Route::post('Jadwal/delete/{id}', [JadwalController::class, 'delete'])->name('jadwal.delete');

Route::get('Ruangan/add', [RuanganController::class, 'create'])->name('ruangan.create');
Route::post('Ruangan/store', [RuanganController::class, 'store'])->name('ruangan.store');
Route::get('Ruangan/edit/{id}', [RuanganController::class, 'edit'])->name('ruangan.edit');
Route::post('Ruangan/update/{id}', [RuanganController::class, 'update'])->name('ruangan.update');
Route::post('Ruangan/delete/{id}', [RuanganController::class, 'delete'])->name('ruangan.delete');

Route::get('User/add', [UserController::class, 'create'])->name('user.create');
Route::post('User/store', [UserController::class, 'store'])->name('user.store');
Route::get('User/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('User/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::post('User/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

// Route::get('PeminjamanRuangan/add', [PeminjamanRuanganController::class, 'create'])->name('peminjamanruangan.create');
// Route::post('PeminjamanRuangan/store', [PeminjamanRuanganController::class, 'store'])->name('peminjamanruangan.store');
// Route::get('PeminjamanRuangan/edit/{id}', [PeminjamanRuanganController::class, 'edit'])->name('peminjamanruangan.edit');
// Route::post('PeminjamanRuangan/update/{id}', [PeminjamanRuanganController::class, 'update'])->name('peminjamanruangan.update');
// Route::post('PeminjamanRuangan/delete/{id}', [PeminjamanRuanganController::class, 'delete'])->name('peminjamanruangan.delete');

Route::get('User/add', [UserController::class, 'create'])->name('user.create');
Route::post('User/store', [UserController::class, 'store'])->name('user.store');



Auth::routes();
// Route::get('login', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');