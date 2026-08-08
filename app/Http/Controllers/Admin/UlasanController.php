<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ulasan;

class UlasanController extends Controller
{
    /**
     * Ulasan dikirim langsung oleh pengunjung dari halaman profil (tanpa
     * form tambah di admin). Panel admin dipakai untuk moderasi: melihat
     * daftar & menghapus ulasan yang tidak pantas/spam.
     */
    public function index()
    {
        $items = Ulasan::terbaru()->paginate(15);

        return view('admin.ulasan.index', compact('items'));
    }

    public function destroy(Ulasan $ulasan)
    {
        $ulasan->delete();

        return redirect()
            ->route('admin.ulasan.index')
            ->with('sukses', 'Ulasan berhasil dihapus.');
    }
}
