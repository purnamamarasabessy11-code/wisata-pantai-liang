<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            // ── BATCH 1 (tampil langsung) ──
            [
                'image_path'      => 'r.jpeg',
                'category'        => 'pantai',
                'alt_text'        => 'Pasir Putih',
                'caption'         => 'Pantai dengan pasir putih halus yang memanjang',
                'overlay_caption' => 'Pantai dengan pasir putih',
                'strip_caption'   => 'Pasir Putih Halus',
                'order'           => 1,
                'is_featured'     => true,
            ],
            [
                'image_path'      => 'c.jpeg',
                'category'        => 'pantai',
                'alt_text'        => 'Pemandangan',
                'caption'         => 'Pemandangan utama Pantai Liang yang memukau',
                'overlay_caption' => 'Pemandangan',
                'strip_caption'   => 'Pemandangan',
                'order'           => 2,
                'is_featured'     => true,
            ],
            [
                'image_path'      => 'a.jpeg',
                'category'        => 'pantai',
                'alt_text'        => 'Air Jernih',
                'caption'         => 'Air laut jernih berwarna toska — ciri khas Pantai Liang',
                'overlay_caption' => 'Air laut jernih',
                'strip_caption'   => 'Air Laut Jernih',
                'order'           => 3,
                'is_featured'     => true,
            ],
            [
                'image_path'      => 's.jpeg',
                'category'        => 'pantai',
                'alt_text'        => 'Pantai View',
                'caption'         => 'Pemandangan Pantai Liang',
                'overlay_caption' => 'Panorama pantai',
                'strip_caption'   => 'Panorama Pantai',
                'order'           => 4,
                'is_featured'     => true,
            ],
            [
                'image_path'      => 'e.jpeg',
                'category'        => 'suasana',
                'alt_text'        => 'Suasana Pantai',
                'caption'         => 'Suasana Pantai Liang — pepohonan di tepi pantai',
                'overlay_caption' => 'Suasana Pantai Liang',
                'strip_caption'   => 'Pepohonan di Pantai',
                'order'           => 5,
                'is_featured'     => true,
            ],
            [
                'image_path'      => '15.jpeg',
                'category'        => 'perahu',
                'alt_text'        => 'Perahu',
                'caption'         => 'Perahu di lokasi Pantai Liang',
                'overlay_caption' => 'Perahu',
                'strip_caption'   => 'Perahu',
                'order'           => 6,
                'is_featured'     => true,
            ],
            [
                'image_path'      => 't.jpeg',
                'category'        => 'pantai',
                'alt_text'        => 'Gradasi Laut',
                'caption'         => 'Gradasi warna laut Pantai Liang',
                'overlay_caption' => 'Gradasi warna laut',
                'strip_caption'   => 'Gradasi Warna Laut',
                'order'           => 7,
                'is_featured'     => true,
            ],
            [
                'image_path'      => 'n.jpeg',
                'category'        => 'pantai',
                'alt_text'        => 'Pemandangan',
                'caption'         => 'Pemandangan indah Pantai Liang',
                'overlay_caption' => 'Pemandangan',
                'strip_caption'   => 'Pemandangan Pantai',
                'order'           => 8,
                'is_featured'     => true,
            ],

            // ── BATCH 2 (muncul setelah "Lihat Lebih Banyak") ──
            [
                'image_path'      => 'z.jpeg',
                'category'        => 'Area Bermain',
                'alt_text'        => 'Area Bermain',
                'caption'         => 'Area Bermain Anak-Anak di Pantai Liang',
                'overlay_caption' => 'Area Bermain',
                'strip_caption'   => 'Area Bermain',
                'order'           => 9,
                'is_featured'     => false,
            ],
            [
                'image_path'      => 'g.jpeg',
                'category'        => 'Area Bermain',
                'alt_text'        => 'Area Bermain',
                'caption'         => 'Anak-anak bermain di Area  Pantai Liang',
                'overlay_caption' => 'Anak-anak bermain',
                'strip_caption'   => 'Area Bermain',
                'order'           => 10,
                'is_featured'     => false,
            ],
            [
                'image_path'      => 'w.jpeg',
                'category'        => 'warung',
                'alt_text'        => 'Warung',
                'caption'         => 'Warung makan sederhana di tepi Pantai Liang',
                'overlay_caption' => 'Warung makan',
                'strip_caption'   => 'Warung Makan',
                'order'           => 11,
                'is_featured'     => false,
            ],
            [
                'image_path'      => 'f.jpeg',
                'category'        => 'rumah-adat',
                'alt_text'        => 'Rumah Adat',
                'caption'         => 'Rumah adat khas Maluku di kawasan Pantai Liang',
                'overlay_caption' => 'Rumah adat',
                'strip_caption'   => 'Rumah Adat',
                'order'           => 12,
                'is_featured'     => false,
            ],
            [
                'image_path'      => 'b.jpg',
                'category'        => 'pantai',
                'alt_text'        => 'Pantai',
                'caption'         => 'Pantai Liang',
                'overlay_caption' => 'Pantai',
                'strip_caption'   => 'Pantai Liang',
                'order'           => 13,
                'is_featured'     => false,
            ],
            [
                'image_path'      => 'liang3.jpeg',
                'category'        => 'suasana',
                'alt_text'        => 'Suasana Pantai',
                'caption'         => 'Kawasan Pantai Liang',
                'overlay_caption' => 'Suasana pantai',
                'strip_caption'   => 'Suasana Pantai',
                'order'           => 14,
                'is_featured'     => false,
            ],
            [
                'image_path'      => 'liang2.jpeg',
                'category'        => 'pantai',
                'alt_text'        => 'Pantai Liang',
                'caption'         => 'Kawasan Pantai Liang',
                'overlay_caption' => 'Pantai Liang',
                'strip_caption'   => 'Pantai Liang',
                'order'           => 15,
                'is_featured'     => false,
            ],
            [
                'image_path'      => '16.jpeg',
                'category'        => 'suasana',
                'alt_text'        => 'Suasana',
                'caption'         => 'Kawasan Pantai Liang',
                'overlay_caption' => 'Suasana pantai',
                'strip_caption'   => 'Suasana Pantai',
                'order'           => 16,
                'is_featured'     => false,
            ],
        ];

        foreach ($items as $item) {
            Galeri::create($item);
        }
    }
}
