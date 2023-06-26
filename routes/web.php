<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeminjamanRuanganController;
use App\Http\Controllers\UserPeminjamanController;
use App\Http\Controllers\SuratController;
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

    Route::get('ruangan/deskripsi/{id}', [RuanganController::class, 'desc'])->middleware('is_admin')->name('Admin.deskripsi');

    Route::get('deskripsi/fasilitas/{id}', [RuanganController::class, 'descedit'])->middleware('is_admin')->name('Admin.fasilitas');

    Route::get('/ruangan/deskripsiA102', function () {
        return view ('Admin.deskripsiA102');
    })->middleware('is_admin')->name('Admin.deskripsiA102');

    Route::get('/ruangan/deskripsiA201', function () {
        return view ('Admin.deskripsiA201');
    })->middleware('is_admin')->name('Admin.deskripsiA201');
    
    Route::get('/ruangan/deskripsiLabEMB', function () {
        return view ('Admin.deskripsiLabEMB');
    })->middleware('is_admin')->name('Admin.deskripsiLabEMB');

    Route::get('/ruangan/deskripsiLabJKM', function () {
        return view ('Admin.deskripsiLabJKM');
    })->middleware('is_admin')->name('Admin.deskripsiLabJKM');

    Route::get('/ruangan/deskripsiLabMLD', function () {
        return view ('Admin.deskripsiLabMLD');
    })->middleware('is_admin')->name('Admin.deskripsiLabMLD');

    Route::get('/ruangan/deskripsiLabRPL', function () {
        return view ('Admin.deskripsiLabRPL');
    })->middleware('is_admin')->name('Admin.deskripsiLabRPL');

    Route::get('/pemohon', [PeminjamanRuanganController::class, 'index'])->middleware('is_admin')->name('Admin.pemohon');

    Route::get('/ruangan', function () {
        return view ('Admin.ruangan');
    })->middleware('is_admin')->name('Admin.ruangan');

    Route::get('/tambahruangan', function () {
        return view ('Admin.tambahruangan');
    })->middleware('is_admin')->name('Admin.tambahruangan');

    Route::get('role', [AdminController::class, 'index'])->middleware('is_admin')->name('Admin.ubahuser');

    Route::get('role user/ubah/{id}', [AdminController::class, 'role_user'])->middleware('is_admin')->name('Admin.ubahroleuser');

    Route::get('role admin/ubah/{id}', [AdminController::class, 'role_admin_lab'])->middleware('is_admin')->name('Admin.ubahroleadminlab');

    Route::get('role admin TU/ubah/{id}', [AdminController::class, 'role_admin_TU'])->middleware('is_admin')->name('Admin.ubahroleadminTU');

    Route::get('pemohon/terima/{id}', [AdminController::class, 'accept'])->middleware('is_admin')->name('Admin.accept');

    Route::get('pemohon/tolak/{id}', [AdminController::class, 'decline'])->middleware('is_admin')->name('Admin.decline');

    Route::post('peminjaman/store', [PeminjamanRuanganController::class, 'store'])->middleware('is_admin')->name('pinjam.store');

    Route::post('tambahruangan/store', [RuanganController::class, 'store'])->middleware('is_admin')->name('tambahruangan.store');

    Route::get('peminjaman', [PeminjamanRuanganController::class, 'dropdown'])->middleware('is_admin')->name('Admin.peminjaman');

    Route::get('deskripsi/fotoruang/{id}', [RuanganController::class, 'imageedit'])->middleware('is_admin')->name('Admin.fotoruang');

    Route::get('editjadwal', [JadwalController::class, 'dropdown'])->middleware('is_admin')->name('Admin.editjadwal');

    Route::get('profile', [AdminController::class, 'indexprofile'])->middleware('is_admin')->name('Admin.profile');

    Route::post('editprofile/update', [AdminController::class, 'update'])->middleware('is_admin')->name('Admin.updateprofile');

    Route::post('deskripsi/gambar/store/{id}', [RuanganController::class, 'storeimage'])->middleware('is_admin')->name('image.store');

    Route::get('editprofile', [AdminController::class, 'edit'])->middleware('is_admin')->name('Admin.editprofile');

    Route::post('editjadwal/store', [JadwalController::class, 'store'])->middleware('is_admin')->name('editjadwal.store');

    Route::post('deskripsi/fasilitas/store/{id}', [RuanganController::class, 'descupdate'])->middleware('is_admin')->name('fasilitas.store');

    Route::get('jadwal', [JadwalController::class, 'index'])->middleware('is_admin')->name('Admin.jadwal');

    Route::get('ruangan', [RuanganController::class, 'index'])->middleware('is_admin')->name('Admin.ruangan');

    Route::view('/dashboard','Admin.dashboard')->middleware('is_admin')->name('Admin.dashboard');

    Route::view('/contact','Admin.contact')->middleware('is_admin')->name('Admin.contact');

    Route::get('/ruangan/delete/{id}', [RuanganController::class,'delete'])->name('ruangan.delete');

    Route::get('ruangan/edit/ruangan/{id}', [RuanganController::class, 'edit'])->middleware('is_admin')->name('Admin.editruang');

    Route::post('ruangan/update/ruangan/{id}', [RuanganController::class, 'update'])->middleware('is_admin')->name('ruangan.update');

    Route::post('jadwal/import', [JadwalController::class, 'import'])->middleware('is_admin')->name('jadwal.import');

    Route::get('jadwal/export', [JadwalController::class, 'export'])->middleware('is_admin')->name('jadwal.export');

    Route::get('jadwal/download', [JadwalController::class, 'download'])->middleware('is_admin')->name('jadwal.download');
});

Route::prefix('user')->group(function(){

    Route::get('ruangan', [RuanganController::class, 'indexuser'])->middleware('auth')->name('User.ruangan');

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

    Route::get('profile', [UserController::class, 'indexuser'])->middleware('auth')->name('User.profile');

    Route::post('editprofile/update', [UserController::class, 'updateuser'])->middleware('auth')->name('User.updateprofile');

    Route::get('editprofile', [UserController::class, 'edituser'])->middleware('auth')->name('User.editprofile');

    Route::get('peminjaman', [UserPeminjamanController::class, 'dropdown'])->middleware('auth')->name('User.peminjaman');

    Route::post('/peminjaman/add', [UserPeminjamanController::class, 'store'])->middleware('auth')->name('User.store');

    Route::get('/statuspinjam', [UserPeminjamanController::class, 'index'])->middleware('auth')->name('User.statuspinjam');

    Route::view('/dashboard','User.dashboard')->middleware('auth')->name('User.dashboard');

    Route::view('/contact','User.contact')->middleware('auth')->name('User.contact');

    Route::get('cetaksuratkelas/{id}', [SuratController::class, 'index'])->middleware('auth')->name('User.surat');

    Route::get('cetaksuratlab/{id}', [SuratController::class, 'indexlab'])->middleware('auth')->name('User.suratlab');

    Route::get('jadwal', [JadwalController::class, 'indexuser'])->middleware('auth')->name('User.jadwal');

    Route::get('ruangan/deskripsi/{id}', [RuanganController::class, 'descuser'])->middleware('auth')->name('User.deskripsi');

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