<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Siswa\SiswaController;

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



// Route untuk menampilkan halaman login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// Route untuk proses login
Route::post('/login', [AuthController::class, 'loginProcess']);

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');



route::middleware('auth:admin')->group(function () {
        


       
        Route::prefix('admin')->group(function () {
            include __DIR__.'/admin/__.php';
        });
    });


    Route::middleware('auth:guru')->group(function () {
        Route::prefix('guru')->group(function () {
            include __DIR__.'/guru/__.php';
        });
    });
    Route::middleware('auth:guru')->group(function () {
        Route::prefix('guru')->group(function () {
            include __DIR__.'/guru/__.php';
        });
    });
    Route::middleware('auth:kepsek')->group(function () {
        Route::prefix('kepsek')->group(function () {
            include __DIR__.'/kepsek/__.php';
        });
    });


    Route::middleware('auth:siswa')->group(function () {
        Route::prefix('siswa')->group(function () {
           include __DIR__.'/siswa/__.php';
        });
    });
