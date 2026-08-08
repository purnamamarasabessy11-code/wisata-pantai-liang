<?php

namespace Database\Seeders;

use App\Models\Tiket;
use Illuminate\Database\Seeder;

class TiketSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama' => 'Dewasa', 'icon' => '👨', 'deskripsi' => 'Tiket masuk untuk pengunjung dewasa.', 'harga' => 10000, 'satuan' => '/ orang', 'kategori' => 'tiket_masuk', 'urutan' => 1],
            ['nama' => 'Anak-anak', 'icon' => '🧒', 'deskripsi' => 'Tiket masuk untuk anak-anak.', 'harga' => 5000, 'satuan' => '/ orang', 'kategori' => 'tiket_masuk', 'urutan' => 2],
            ['nama' => 'Sepeda Motor', 'icon' => '🏍', 'deskripsi' => 'Biaya parkir kendaraan roda dua.', 'harga' => 5000, 'satuan' => '/ motor', 'kategori' => 'parkir', 'urutan' => 3],
            ['nama' => 'Mobil', 'icon' => '🚗', 'deskripsi' => 'Biaya parkir kendaraan roda empat.', 'harga' => 10000, 'satuan' => '/ mobil', 'kategori' => 'parkir', 'urutan' => 4],
        ];

        foreach ($data as $item) {
            Tiket::create($item);
        }
    }
}
