<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\KategoriWisataController;
use App\Http\Controllers\ObyekWisataController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenginapanController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\UserController;



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

//untuk User yang udah login Pelanggan
Route::middleware('auth')->group(function () {
    // Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/logout', [AuthenController::class, 'logout'])->name('logout');
    //meampilkan reservasi
    Route::get('reservasi',[ReservasiController::class, 'index'])->name('reservasi');
    //meampilkan paketwisata
    Route::get('paketwisata',[PaketController::class, 'index'])->name('paketwisata');
    //Menampilkan Dashboard
    Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');
});

//Untuk role admin
Route::middleware('role:admin,pemilik')->group(function () {
    //memnampilkan user
    Route::get('users', [UserController::class, 'index'])->name('user.index');
    Route::get('edit/{user}', [KaryawanController::class, 'edit'])->name('user.edit');
    Route::put('update/{user}', [KaryawanController::class, 'update'])->name('user.update');
    Route::get('create', [KaryawanController::class, 'create'])->name('user.create');
    Route::delete('{user}', [KaryawanController::class, 'delete'])->name('user.delete');
    Route::post('store', [UserController::class, 'store'])->name('user.store');

     //memnampilkan karyawan pada site bar
    Route::get('karyawan',[KaryawanController::class, 'index'])->name('karyawan');
    //meampilkan pelanggan
    Route::get('pelanggan',[PelangganController::class, 'index'])->name('pelanggan');
    
});
//Tahapan Login dan Register
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenController::class, 'login'])->name('login');
    Route::get('registrasi', [AuthenController::class, 'register'])->name('register');
    Route::post('login/authentication', [AuthenController::class, 'authenticate'])->name('login.authentication');
    Route::post('registrasi/authentication', [AuthenController::class, 'registrasi'])->name('register.authentication');

});
