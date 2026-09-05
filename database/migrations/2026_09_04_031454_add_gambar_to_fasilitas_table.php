<?php
// database/migrations/2026_08_09_000001_add_gambar_to_fasilitas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('fasilitas', function (Blueprint $table) {
            // Disimpan sebagai "storage/fasilitas/xxx.jpg", sama seperti pola image_path di Galeri
            $table->string('gambar')->nullable()->after('icon');
        });
    }

    public function down(): void
    {
        Schema::table('fasilitas', function (Blueprint $table) {
            $table->dropColumn('gambar');
        });
    }
};
