<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();

            // Nama kategori tiket, contoh: "Tiket Masuk Dewasa", "Parkir Motor"
            $table->string('nama');

            // Deskripsi singkat / keterangan tambahan
            $table->text('deskripsi')->nullable();

            // Emoji/icon untuk ditampilkan di kartu tiket, contoh: "👨", "🏍"
            $table->string('icon')->nullable();

            // Harga dalam Rupiah (0 = gratis)
            $table->unsignedInteger('harga')->default(0);

            // Satuan, misal "/ orang", "/ motor", "/ mobil"
            $table->string('satuan')->nullable();

            // Kategori pengelompokan: tiket_masuk, parkir, wahana, lainnya
            $table->string('kategori')->default('tiket_masuk');

            // Tampil / sembunyikan tanpa perlu hapus data
            $table->boolean('is_active')->default(true);

            // Urutan tampilan (lebih kecil = lebih dulu)
            $table->unsignedInteger('urutan')->default(0);

            $table->timestamps();

            $table->index('kategori');
            $table->index(['is_active', 'urutan']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
