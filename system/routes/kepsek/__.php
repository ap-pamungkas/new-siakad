<?php


use App\Http\Controllers\Kepsek\GuruController;
use App\Http\Controllers\Kepsek\KelasSiswaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Kepsek\BerandaController;
use App\Http\Controllers\Kepsek\NilaiController;
use App\Http\Controllers\Kepsek\SiswaController;




Route::controller(berandaController::class)->group(function(){
    Route::get('/beranda','index');
    Route::get('/profile','profile');
});

Route::controller(SiswaController::class)->group(function(){
    Route::get('/siswa','index');
    Route::get('/siswa/{siswa}', 'show');
});

Route::controller(NilaiController::class)->group(function(){
    Route::get('/nilai','index');
   
});

Route::controller(GuruController::class)->group(function(){
    Route::get('/guru','index');
    Route::get('/guru/{guru}', 'show');
   
});

Route::prefix('kelas-siswa')->group(function(){
    Route::controller(KelasSiswaController::class)->group(function(){
        Route::get('/','index');
     
        Route::get('/show/{kelas_siswa}','show');
   
    });
});






