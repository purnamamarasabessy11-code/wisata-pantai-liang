<?php

namespace Database\Seeders;

use App\Models\Ulasan;
use Illuminate\Database\Seeder;

class UlasanSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'nama'     => 'Siti Rahma',
                'rating'   => 5,
                'komentar' => 'Pantainya bersih banget dan airnya jernih, pasir putihnya halus. Anak-anak senang main di taman bermainnya juga.',
            ],
            [
                'nama'     => 'Andi Wijaya',
                'rating'   => 4,
                'komentar' => 'Suasana tenang, cocok buat liburan keluarga. Sayang akses jalannya agak sempit.',
            ],
            [
                'nama'     => 'Maria Tuhumury',
                'rating'   => 5,
                'komentar' => 'Sunset di sini luar biasa indah! Warung makannya juga enak-enak dan murah.',
            ],
        ];

        foreach ($items as $item) {
            Ulasan::create($item);
        }
    }
}
