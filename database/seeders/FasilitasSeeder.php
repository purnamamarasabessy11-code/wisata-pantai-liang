<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // GRATIS
            ['nama' => 'Parkir', 'deskripsi' => 'Area parkir luas untuk motor dan mobil.', 'tipe' => 'gratis', 'icon' => '🅿️', 'harga' => null, 'satuan_harga' => null, 'urutan' => 1],
            ['nama' => 'Mushola,', 'deskripsi' => 'Tempat ibadah yang bersih dan nyaman.', 'tipe' => 'gratis', 'icon' => '🕌', 'harga' => null, 'satuan_harga' => null, 'urutan' => 2],

            // BERBAYAR
            ['nama' => 'Warung Makan', 'deskripsi' => 'Rujak buah, kelapa muda, mie, dan camilan lainnya.', 'tipe' => 'bayar', 'icon' => '🍽️', 'harga' => null, 'satuan_harga' => null, 'urutan' => 3],
            ['nama' => 'Toilet', 'deskripsi' => 'Toilet umum tersedia di area pantai.', 'tipe' => 'bayar', 'icon' => '🚻', 'harga' => 3000, 'satuan_harga' => '/ pemakaian', 'urutan' => 4],
            ['nama' => 'Rumah Adat', 'deskripsi' => 'Sewa rumah adat khas Maluku untuk bersantai bersama keluarga.', 'tipe' => 'bayar', 'icon' => '🏠', 'harga' => 250000, 'satuan_harga' => '/ hari', 'urutan' => 5],
            ['nama' => 'Terpal', 'deskripsi' => 'Alas duduk santai di tepi pantai.', 'tipe' => 'bayar', 'icon' => '🟦', 'harga' => 30000, 'satuan_harga' => '/ hari', 'urutan' => 6],
            ['nama' => 'Bantal Renang', 'deskripsi' => 'Pelampung bantal untuk anak-anak dan dewasa.', 'tipe' => 'bayar', 'icon' => '🛟', 'harga' => 5000, 'satuan_harga' => '/ hari', 'urutan' => 7],
            ['nama' => 'Air Tawar', 'deskripsi' => 'Air tawar untuk bilas setelah berenang.', 'tipe' => 'bayar', 'icon' => '💧', 'harga' => 5000, 'satuan_harga' => '/ jerigen', 'urutan' => 8],

            // WAHANA
            ['nama' => 'Banana Boat', 'deskripsi' => 'Sensasi seru ditarik perahu dengan pelampung pisang.', 'tipe' => 'wahana', 'icon' => '🍌', 'harga' => 150000, 'satuan_harga' => '/ 5 orang', 'urutan' => 9],
            ['nama' => 'Perahu', 'deskripsi' => 'Jelajahi laut Pantai Liang dengan perahu tradisional.', 'tipe' => 'wahana', 'icon' => '🚤', 'harga' => 100000, 'satuan_harga' => '/ 1 jam', 'urutan' => 10],
            ['nama' => 'Taman Bermain', 'deskripsi' => 'Area bermain anak yang menyenangkan di tepi pantai.', 'tipe' => 'wahana', 'icon' => '🎠', 'harga' => 5000, 'satuan_harga' => '/ hari', 'urutan' => 11],
        ];

        foreach ($data as $item) {
            Fasilitas::create($item);
        }
    }
}
