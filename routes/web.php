<?php


use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});
// METHOD: GET, POST, PUT, DELETE
// GET: untuk mengambil data
// POST: action Request untuk menambahkan data
// PUT: action Request untuk mengubah data
// DELETE: action Request untuk menghapus data

Route::get('greeting', [LatihanController::class, 'greeting'])->name('greeting');
Route::get('penjumlahan', [LatihanController::class, 'penjumlahan'])->name('penjumlahan');
Route::post('action-penjumlahan', [LatihanController::class, 'actionPenjumlahan'])->name('action-penjumlahan');

Route::get('pengurangan', [LatihanController::class, 'pengurangan'])->name('pengurangan');
Route::post('action-pengurangan', [LatihanController::class, 'actionPengurangan'])->name('action-pengurangan');

Route::get('pembagian', [LatihanController::class, 'pembagian'])->name('pembagian');
Route::post('action-pembagian', [LatihanController::class, 'actionPembagian'])->name('action-pembagian');

Route::get('perkalian', [LatihanController::class, 'perkalian'])->name('perkalian');
Route::post('action-perkalian', [LatihanController::class, 'actionPerkalian'])->name('action-perkalian');




// Login
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');

Route::middleware('auth')->group(function(){

});
// Resource : get, post, put, delete
    Route::resource('user', UserController::class);
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
