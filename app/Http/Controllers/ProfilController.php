<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Ulasan;
use App\Models\Tiket;

class ProfilController extends Controller
{
    /**
     * Tampilkan halaman profil Pantai Liang.
     *
     * Sebelumnya halaman ini dirender langsung lewat Route::view(),
     * tapi section ulasan butuh data dari database (tabel ulasans),
     * jadi route-nya naik level jadi controller seperti ini.
     *
     * $ulasans dikirim terurut terbaru lebih dulu (setara items.unshift()
     * di versi localStorage lama), lalu Blade yang menghitung rata-rata
     * rating untuk ringkasan skor di bagian atas section ulasan.
     */
    public function index()
    {
        $ulasans = Ulasan::terbaru()->get();
        $fotoPreview = Galeri::latest()->take(8)->get();
        $tikets = Tiket::aktif()->urut()->get();

        return view('profil', [
            'ulasans' => $ulasans,
            'fotoPreview' => $fotoPreview,
            'tikets' => $tikets,
        ]);
    }
}
