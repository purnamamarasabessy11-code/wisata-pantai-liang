<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUlasanRequest;
use App\Models\Ulasan;

class UlasanController extends Controller
{
    /**
     * Simpan ulasan baru dari form di halaman profil.
     *
     * Alur: form HTML submit biasa (bukan AJAX) -> validasi server ->
     * simpan ke DB -> redirect kembali ke halaman asal + anchor #ulasan,
     * dengan flash message untuk feedback ke pengunjung.
     *
     * Tidak ada moderasi: ulasan langsung tampil begitu tersimpan.
     */
    public function store(StoreUlasanRequest $request)
    {
        Ulasan::create($request->validated());

        return back()
            ->with('ulasan_sukses', 'Terima kasih, ulasan Anda berhasil dikirim!')
            ->withFragment('ulasan');
    }
}
