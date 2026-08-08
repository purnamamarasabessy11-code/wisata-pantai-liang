<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\CariController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\GaleriController as AdminGaleriController;
use App\Http\Controllers\Admin\FasilitasController as AdminFasilitasController;
use App\Http\Controllers\Admin\UlasanController as AdminUlasanController;
use App\Http\Controllers\Admin\TiketController as AdminTiketController;

Route::get('/', [ProfilController::class, 'index'])->name('profil');
Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');


Route::get('/panduan_rute', function () {
    return view('panduan_rute');
});


Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');


Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');


Route::get('/cari', [CariController::class, 'index'])->name('cari');

Route::get('/cari/ajax', [CariController::class, 'ajax'])->name('cari.ajax');



/*
|--------------------------------------------------------------------------
| Panel Admin
|--------------------------------------------------------------------------
| Semua route di bawah ini pakai prefix + nama route "admin.*".
| Login/logout terbuka untuk siapa saja, sisanya wajib login (middleware auth).
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'create'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'store'])->name('login.store');
    Route::post('/logout', [AdminAuthController::class, 'destroy'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::resource('galeri', AdminGaleriController::class)
            ->except('show')
            ->parameters(['galeri' => 'galeri']);

        Route::resource('fasilitas', AdminFasilitasController::class)
            ->except('show')
            ->parameters(['fasilitas' => 'fasilitas']);

        Route::resource('tiket', AdminTiketController::class)
            ->except('show')
            ->parameters(['tiket' => 'tiket']);

        Route::get('/ulasan', [AdminUlasanController::class, 'index'])->name('ulasan.index');
        Route::delete('/ulasan/{ulasan}', [AdminUlasanController::class, 'destroy'])->name('ulasan.destroy');
    });
});
