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
        Schema::create('galeris', function (Blueprint $table) {
            $table->id();

            // Nama file gambar, contoh: r.jpeg, c.jpeg (disimpan di public/)
            $table->string('image_path');

            // Kategori: pantai, suasana, perahu, taman, warung, rumah-adat
            $table->string('category');

            // Alt text untuk tag <img alt="...">
            $table->string('alt_text')->nullable();

            // data-cap -> caption lengkap untuk lightbox
            $table->text('caption')->nullable();

            // .ov-cap -> caption pendek di overlay saat hover
            $table->string('overlay_caption')->nullable();

            // .cap-text -> teks di caption strip bagian bawah card
            $table->string('strip_caption')->nullable();

            // Urutan tampil di galeri (lebih kecil = lebih dulu)
            $table->unsignedInteger('order')->default(0);

            // Batch 1 (featured/tampil langsung) vs batch 2 (muncul setelah klik "Lihat Lebih Banyak")
            $table->boolean('is_featured')->default(true);

            $table->timestamps();

            $table->index('category');
            $table->index(['is_featured', 'order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};
