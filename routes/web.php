<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\Userontroller;
use App\Http\Controllers\PeminjamanRuanganController;
use App\Http\Controllers\UserPeminjamanController;
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

    Route::get('/ruangan/deskripsiA101', function () {
        return view ('Admin.deskripsiA101');
    })->middleware('auth')->name('Admin.deskripsiA101');

    Route::get('/ruangan/deskripsiA102', function () {
        return view ('Admin.deskripsiA102');
    })->middleware('auth')->name('Admin.deskripsiA102');

    Route::get('/ruangan/deskripsiA201', function () {
        return view ('Admin.deskripsiA201');
    })->middleware('auth')->name('Admin.deskripsiA201');
    
    Route::get('/ruangan/deskripsiLabEMB', function () {
        return view ('Admin.deskripsiLabEMB');
    })->middleware('auth')->name('Admin.deskripsiLabEMB');

    Route::get('/ruangan/deskripsiLabJKM', function () {
        return view ('Admin.deskripsiLabJKM');
    })->middleware('auth')->name('Admin.deskripsiLabJKM');

    Route::get('/ruangan/deskripsiLabMLD', function () {
        return view ('Admin.deskripsiLabMLD');
    })->middleware('auth')->name('Admin.deskripsiLabMLD');

    Route::get('/ruangan/deskripsiLabRPL', function () {
        return view ('Admin.deskripsiLabRPL');
    })->middleware('auth')->name('Admin.deskripsiLabRPL');

    Route::get('/jadwal', function () {
        return view ('Admin.jadwal');
    })->middleware('is_admin')->name('Admin.jadwal');

    Route::get('/editjadwal', function () {
        return view ('Admin.editjadwal');
    })->middleware('is_admin')->name('Admin.editjadwal');

    Route::get('/pemohon', [PeminjamanRuanganController::class, 'index'])->middleware('is_admin')->name('Admin.pemohon');

    Route::get('/ruangan', function () {
        return view ('Admin.ruangan');
    })->middleware('is_admin')->name('Admin.ruangan');

    Route::get('/tambahruangan', function () {
        return view ('Admin.tambahruangan');
    })->middleware('is_admin')->name('Admin.tambahruangan');

    Route::get('/peminjaman', function () {
        return view ('Admin.peminjaman');
    })->middleware('is_admin')->name('Admin.peminjaman');

    Route::get('/profile', function () {
        return view ('Admin.profile');
    })->middleware('is_admin')->name('Admin.profile');

    Route::get('role', [AdminController::class, 'index'])->middleware('is_admin')->name('Admin.ubahuser');

    Route::get('role/ubah/{id}', [AdminController::class, 'role'])->middleware('is_admin')->name('Admin.ubahrole');

    Route::get('pemohon/terima/{id}', [AdminController::class, 'accept'])->middleware('is_admin')->name('Admin.accept');

    Route::get('pemohon/tolak/{id}', [AdminController::class, 'decline'])->middleware('is_admin')->name('Admin.decline');

    Route::post('peminjaman/store', [PeminjamanRuanganController::class, 'store'])->name('pinjam.store');

    Route::view('/dashboard','Admin.dashboard')->middleware('is_admin')->name('Admin.dashboard');

    Route::view('/contact','Admin.contact')->middleware('is_admin')->name('Admin.contact');

});

Route::prefix('user')->group(function(){

    Route::get('/ruangan/deskripsiA101', function () {
        return view ('User.deskripsiA101');
    })->middleware('auth')->name('User.deskripsiA101');

    Route::get('/ruangan/deskripsiA102', function () {
        return view ('User.deskripsiA102');
    })->middleware('auth')->name('User.deskripsiA102');

    Route::get('/ruangan/deskripsiA201', function () {
        return view ('User.deskripsiA201');
    })->middleware('auth')->name('User.deskripsiA201');
    
    Route::get('/ruangan/deskripsiLabEMB', function () {
        return view ('User.deskripsiLabEMB');
    })->middleware('auth')->name('User.deskripsiLabEMB');

    Route::get('/ruangan/deskripsiLabJKM', function () {
        return view ('User.deskripsiLabJKM');
    })->middleware('auth')->name('User.deskripsiLabJKM');

    Route::get('/ruangan/deskripsiLabMLD', function () {
        return view ('User.deskripsiLabMLD');
    })->middleware('auth')->name('User.deskripsiLabMLD');

    Route::get('/ruangan/deskripsiLabRPL', function () {
        return view ('User.deskripsiLabRPL');
    })->middleware('auth')->name('User.deskripsiLabRPL');

    Route::get('/deskripsiA101/A101', function () {
        return view ('User.A101');
    })->middleware('auth')->name('User.A101');

    Route::get('/deskripsi/A102', function () {
        return view ('User.A102');
    })->middleware('auth')->name('User.A102');

    Route::get('/deskripsi/A201', function () {
        return view ('User.A201');
    })->middleware('auth')->name('User.A201');

    Route::get('/deskripsi/lab-embedded', function () {
        return view ('User.labembedded');
    })->middleware('auth')->name('User.labembedded');

    Route::get('/deskripsi/lab-jarkom', function () {
        return view ('User.labjarkom');
    })->middleware('auth')->name('User.labjarkom');

    Route::get('/deskripsi/lab-rpl', function () {
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

    Route::get('/peminjaman', function () {
        return view ('User.peminjaman');
    })->middleware('auth')->name('User.peminjaman');

    Route::get('/peminjaman/add', [UserPeminjamanController::class, 'store'])->middleware('auth')->name('User.store');

    Route::get('/statuspinjam', [UserPeminjamanController::class, 'index'])->middleware('auth')->name('User.statuspinjam');

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