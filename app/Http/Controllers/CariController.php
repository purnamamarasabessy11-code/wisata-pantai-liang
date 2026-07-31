<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CariController extends Controller
{
    public function index(Request $request)
    {
        $q = trim($request->get('q', ''));
        if (strlen($q) < 2) {
            return view('cari', ['hasil' => [], 'q' => $q]);
        }
        $hasil = $this->cariSemua($q);
        return view('cari', compact('hasil', 'q'));
    }

    public function ajax(Request $request)
    {
        $q = trim($request->get('q', ''));
        if (strlen($q) < 2) {
            return response()->json([]);
        }
        return response()->json($this->cariSemua($q));
    }

    private function cariSemua(string $q): array
    {
        $kata  = '%' . $q . '%';
        $hasil = [];

        // 1. GALERI FOTO (dari database)
        if (DB::getSchemaBuilder()->hasTable('galeris')) {
            $galeri = DB::table('galeris')
                ->where('caption', 'like', $kata)
                ->limit(5)->get();

            foreach ($galeri as $r) {
                $hasil[] = [
                    'kategori'  => 'Galeri Foto',
                    'ikon'      => '📷',
                    'judul'     => $r->caption ?? 'Foto Galeri',
                    'deskripsi' => Str::limit($r->deskripsi ?? '', 90),
                    'url'       => url('/galeri'),
                ];
            }
        }

        // 2. FASILITAS (dari database)
        if (DB::getSchemaBuilder()->hasTable('fasilitas')) {
            $fasilitas = DB::table('fasilitas')
                ->where(function ($q2) use ($kata) {
                    $q2->where('nama', 'like', $kata)
                       ->orWhere('deskripsi', 'like', $kata);
                })
                ->limit(5)->get();

            foreach ($fasilitas as $r) {
                $hasil[] = [
                    'kategori'  => 'Fasilitas',
                    'ikon'      => $r->icon ?? $r->ikon ?? '🏖️',
                    'judul'     => $r->nama ?? '',
                    'deskripsi' => Str::limit($r->deskripsi ?? '', 90),
                    'url'       => url('/fasilitas'),
                ];
            }
        }

        // 3. RUTE PERJALANAN (data statis, sesuai isi panduan_rute.blade.php)
        $langkahRute = [
            [
                'tempat'    => 'Terminal Mardika, Ambon',
                'deskripsi' => 'Titik keberangkatan utama dari pusat kota Ambon. Tersedia angkutan umum menuju arah Salahutu.',
            ],
            [
                'tempat'    => 'Jalan Trans Salahutu',
                'deskripsi' => 'Ikuti jalur utama Ambon–Salahutu. Jalan beraspal dengan pemandangan pegunungan dan laut di sisi kanan.',
            ],
            [
                'tempat'    => 'Pertigaan Desa Liang',
                'deskripsi' => 'Belok ke arah papan penunjuk "Pantai Liang / Hunimua". Ikuti jalan desa sejauh ±2 km.',
            ],
            [
                'tempat'    => 'Pantai Liang (Hunimua)',
                'deskripsi' => 'Tiba di area parkir utama. Beli tiket di loket masuk dan nikmati keindahan pantai!',
            ],
        ];

        // kata kunci umum yang juga harus mengarahkan ke halaman rute
        $kataKunciRute = ['rute', 'arah', 'jalan', 'transportasi', 'navigasi', 'peta', 'map'];

        $cocokRute = false;
        foreach ($langkahRute as $langkah) {
            if (Str::contains(Str::lower($langkah['tempat']), Str::lower($q))
                || Str::contains(Str::lower($langkah['deskripsi']), Str::lower($q))) {
                $cocokRute = true;
                break;
            }
        }
        if (!$cocokRute) {
            foreach ($kataKunciRute as $kk) {
                if (Str::contains(Str::lower($kk), Str::lower($q)) || Str::contains(Str::lower($q), $kk)) {
                    $cocokRute = true;
                    break;
                }
            }
        }
        if ($cocokRute) {
            $hasil[] = [
                'kategori'  => 'Panduan Rute',
                'ikon'      => '🗺️',
                'judul'     => 'Panduan Rute ke Pantai Liang',
                'deskripsi' => 'Dari Kota Ambon menuju Pantai Liang · ±40 km · 60–90 menit',
                'url'       => url('/panduan_rute'),
            ];
        }

        // 4. ULASAN (dari database)
        if (DB::getSchemaBuilder()->hasTable('ulasans')) {
            $ulasan = DB::table('ulasans')
                ->where(function ($q2) use ($kata) {
                    $q2->where('nama', 'like', $kata)
                       ->orWhere('komentar', 'like', $kata);
                })
                ->limit(3)->get();

            foreach ($ulasan as $r) {
                $hasil[] = [
                    'kategori'  => 'Ulasan Pengunjung',
                    'ikon'      => '💬',
                    'judul'     => $r->nama ?? 'Pengunjung',
                    'deskripsi' => Str::limit($r->komentar ?? '', 90),
                    'url'       => url('/#ulasan'),
                ];
            }
        }

        return $hasil;
    }
}
