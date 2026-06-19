<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Tampilkan semua galeri (terurut), dikelompokkan featured vs sisanya,
     * supaya Blade bisa render persis seperti versi hardcoded sebelumnya:
     * batch 1 langsung tampil, batch 2 muncul lewat tombol "Lihat Lebih Banyak".
     */
    public function index(Request $request)
    {
         $items = Galeri::query()
            ->ordered()
            ->get();

        return view('galeri', [
            'items' => $items,
        ]);
    }
}
