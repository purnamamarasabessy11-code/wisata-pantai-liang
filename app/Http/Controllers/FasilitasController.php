<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index(Request $request)
    {
        $fasilitas = Fasilitas::aktif()
            ->orderBy('urutan')
            ->get();

        $stats = [
            'gratis' => $fasilitas->where('tipe', 'gratis')->count(),
            'bayar'  => $fasilitas->where('tipe', 'bayar')->count(),
            'wahana' => $fasilitas->where('tipe', 'wahana')->count(),
            'total'  => $fasilitas->count(),
        ];

        return view('fasilitas', compact('fasilitas', 'stats'));
    }
}
