<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
/*
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
//login dan register
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('register', [LoginController::class, 'register']);
Route::post('/', [LoginController::class, 'proses']);

//route admin master
route::get('ruang', [ReservasiController::class, 'ruang'])->name('ruang');
route::get('dasboard', [ReservasiController::class, 'dasboard'])->name('dasboard');
route::get('pengguna', [ReservasiController::class, 'pengguna'])->name('pengguna');

//route admin 
route::get('home', [AdminController::class, 'home']);
route::get('terpakai', [AdminController::class, 'terpakai']);
route::get('ruangan', [AdminController::class, 'ruangan']);
route::get('mendata', [AdminController::class, 'mendata']);
route::get('PenggunaRuangan', [AdminController::class, 'PenggunaRuangan']);
//route proses crud
route::post('/ruangan/proses', [AdminController::class, 'proses']);
route::get('/ruangan/hapus/{id}', [AdminController::class, 'hapus']);