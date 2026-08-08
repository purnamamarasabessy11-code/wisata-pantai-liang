<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Buat akun admin default kalau belum ada.
     * Login: admin@pantailiang.com / admin123 (ganti setelah login pertama!)
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@pantailiang.com'],
            [
                'name'     => 'Admin Pantai Liang',
                'password' => Hash::make('admin123'),
            ]
        );
    }
}
