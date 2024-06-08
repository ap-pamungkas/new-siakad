<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BerandaAdminController;
use App\Http\Controllers\Admin\GuruAdminController;
use App\Http\Controllers\Admin\KelasAdminController;
use App\Http\Controllers\Admin\KelasSiswaAdminController;
use App\Http\Controllers\Admin\KepsekAdminController;
use App\Http\Controllers\Admin\LaporanAdminController;
use App\Http\Controllers\Admin\MapelAdminController;
use App\Http\Controllers\Admin\NilaiAdminController;
use App\Http\Controllers\Admin\SiswaAdminController;
use App\Http\Controllers\Admin\SemesterAdminController;


Route::get('/beranda', function () {
    return view('admin.beranda');
})->middleware('auth.redirect');;


Route::controller(BerandaAdminController::class)->group(function(){
    Route::get('/beranda','beranda');
    Route::get('/profile','profile');
});


Route::prefix('master-data')->group(function(){
    Route::controller(GuruAdminController::class)->group(function(){
        Route::get('/guru','index');
        Route::post('/guru','store');
        Route::put('/guru/{guru}','update');
        Route::get('/guru/{guru}','show');
        Route::delete('guru/{guru}','destroy');

       
    });

    Route::controller(SiswaAdminController::class)->group(function(){
        Route::get('siswa','index');
        Route::post('/siswa','store');
        Route::put('/siswa/{siswa}','update');
        Route::get('/siswa/{siswa}','show');
        Route::delete('siswa/{siswa}','destroy');
    });
    Route::controller(KepsekAdminController::class)->group(function(){
        Route::get('kepsek','index');
        Route::post('/kepsek','store');
        Route::put('/kepsek/{kepsek}','update');
        Route::get('/kepsek/{kepsek}','show');
        Route::delete('kepsek/{kepsek}','destroy');
    });

    Route::controller(KelasAdminController::class)->group(function(){
        Route::get('kelas','index');
        Route::post('kelas','store');
        Route::delete('kelas/{kelas}','destroy');
    });
    Route::controller(SemesterAdminController::class)->group(function(){
        Route::get('semester','index');
        Route::post('semester','store');
        Route::delete('semester/{semester}','destroy');
    });
    Route::controller(MapelAdminController::class)->group(function(){
        Route::get('mapel','index');
        Route::post('mapel','store');
        Route::delete('mapel/{mapel}','destroy');
    });
    Route::prefix('kelas-siswa')->group(function(){
        Route::controller(KelasSiswaAdminController::class)->group(function(){
            Route::get('/','index');
            Route::get('/create','create');
            Route::get('/show/{kelas_siswa}','show');
            Route::post('/','store');
            Route::delete('/{kelas_siswa}','destroy');
        });
    });
    Route::prefix('nilai')->group(function(){
        Route::controller(NilaiAdminController::class)->group(function(){
            Route::get('/','index');
            Route::get('/tambah','create');
            Route::get('/show/{nilai}','show');
            Route::post('/','store');
            Route::delete('/{nilai}','destroy');
        });
    });
    
    
});

