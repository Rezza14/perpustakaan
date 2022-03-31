<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('siswa', SiswaController::class)->middleware('auth');
Route::resource('pinjam', PinjamController::class)->middleware('auth');
Route::resource('pengembalian', PengembalianController::class)->middleware('auth');
Route::resource('buku', BukuController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
