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


Route::prefix('admin')->group(function () {

    Route::get('/jadwal', function () {
        return view ('Admin.jadwal');
    })->middleware('is_admin')->name('Admin.jadwal');

    Route::get('/pemohon', [PeminjamanRuanganController::class, 'index'])->middleware('is_admin')->name('Admin.pemohon');

    Route::get('/ruangan', function () {
        return view ('Admin.ruangan');
    })->middleware('is_admin')->name('Admin.ruangan');

    Route::get('/profile', function () {
        return view ('Admin.profile');
    })->middleware('is_admin')->name('Admin.profile');

    Route::view('/dashboard','Admin.dashboard')->middleware('is_admin')->name('Admin.dashboard');

    Route::view('/contact','Admin.contact')->middleware('is_admin')->name('Admin.contact');

});

Route::prefix('user')->group(function(){

    Route::get('/ruangan/A101', function () {
        return view ('User.A101');
    })->middleware('auth')->name('User.A101');

    Route::get('/ruangan/A102', function () {
        return view ('User.A102');
    })->middleware('auth')->name('User.A102');

    Route::get('/ruangan/A201', function () {
        return view ('User.A201');
    })->middleware('auth')->name('User.A201');

    Route::get('/ruangan/lab-embedded', function () {
        return view ('User.labembedded');
    })->middleware('auth')->name('User.labembedded');

    Route::get('/ruangan/lab-jarkom', function () {
        return view ('User.labjarkom');
    })->middleware('auth')->name('User.labjarkom');

    Route::get('/ruangan/lab-rpl', function () {
        return view ('User.labrpl');
    })->middleware('auth')->name('User.labrpl');

    Route::get('/ruangan/lab-mulmed', function () {
        return view ('User.labmulmed');
    })->middleware('auth')->name('User.labmulmed');

    Route::get('/jadwal', function () {
        return view ('User.jadwal');
    })->middleware('auth')->name('User.jadwal');

    Route::get('/ruangan', function () {
        return view ('User.ruangan');
    })->middleware('auth')->name('User.ruangan');

    Route::get('/profile', function () {
        return view ('User.profile');
    })->middleware('auth')->name('User.profile');

    Route::view('/dashboard','User.dashboard')->middleware('auth')->name('User.dashboard');

    Route::view('/contact','User.contact')->middleware('auth')->name('User.contact');

});

Route::get('/', [HomeController::class, 'index'])->name('welcome')->middleware('auth');;
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');;
// Route::get('Admin/add', [AdminController::class, 'create'])->name('admin.create');
// Route::post('Admin/store', [AdminController::class, 'store'])->name('admin.store');
// Route::get('Admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
// Route::post('Admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
// Route::post('Admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

// Route::get('User/add', [UserController::class, 'create'])->name('user.create');
// Route::post('User/store', [UserController::class, 'store'])->name('user.store');

Auth::routes();
// Route::get('login', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');