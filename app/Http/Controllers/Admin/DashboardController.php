<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use App\Models\Galeri;
use App\Models\Tiket;
use App\Models\Ulasan;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'galeri'    => Galeri::count(),
            'ulasan'    => Ulasan::count(),
            'fasilitas' => Fasilitas::count(),
            'tiket'     => Tiket::count(),
            'rata_rating' => round((float) Ulasan::avg('rating'), 1),
        ];

        $ulasanTerbaru = Ulasan::terbaru()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'ulasanTerbaru'));
    }
}
