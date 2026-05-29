<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profil');
})->name('profil');


Route::get('/panduan_rute', function () {
    return view('panduan_rute');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});


Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');
