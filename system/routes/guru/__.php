<?php

use App\Http\Controllers\guru\NilaiController;
use App\Http\Controllers\guru\berandaController;
use App\Http\Controllers\Guru\KelasController;
use App\Http\Controllers\Guru\SiswaController;
use Illuminate\Support\Facades\Route;






Route::controller(berandaController::class)->group(function(){
   
    Route::get('/profile','profile');

});


Route::controller(NilaiController::class)->group(function(){
    Route::prefix('nilai')->group(function(){
        Route::get('/','index');

    Route::post('/','store');
    Route::delete('/{nilai}','destroy');
    });



    Route::controller(SiswaController::class)->group(function(){
        Route::get('siswa','index');
        Route::get('siswa/create','create');
        Route::post('/siswa','store');
        Route::put('/siswa/{siswa}','update');
        Route::get('/siswa/{siswa}','show');
        Route::delete('siswa/{siswa}','destroy');
    });
});



