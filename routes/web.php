<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GantiPassController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SubKategoriController;
use App\Http\Controllers\UserController;

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

Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout']);

Route::resource('/ganti-password', GantiPassController::class)->middleware('auth');

Route::resource('/', DashboardController::class)->middleware('auth');
Route::resource('/karyawan', KaryawanController::class)->middleware('auth');
Route::resource('/lokasi', LokasiController::class)->middleware('auth');
Route::resource('/kategori', KategoriController::class)->middleware('auth');
Route::resource('/sub-kategori', SubKategoriController::class)->middleware('auth');
Route::resource('/user', UserController::class)->middleware('auth');
