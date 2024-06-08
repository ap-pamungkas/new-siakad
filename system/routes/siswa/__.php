<?php

use App\Http\Controllers\Siswa\SiswaController;
use Illuminate\Support\Facades\Route;






Route::controller(SiswaController::class)->group(function(){
    Route::get("/", 'index');
    Route::get("/nilai", 'showNilai');
    Route::get("/profile", 'profile');
});







