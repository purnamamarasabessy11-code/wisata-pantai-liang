<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\FasilitasController;


Route::get('/', [ProfilController::class, 'index'])->name('profil');
Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');


Route::get('/panduan_rute', function () {
    return view('panduan_rute');
});


Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');


Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
