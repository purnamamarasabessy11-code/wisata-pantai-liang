<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi');
            $table->enum('tipe', ['gratis', 'bayar', 'wahana']);
            $table->string('icon')->nullable(); // emoji atau class icon
            $table->unsignedInteger('harga')->nullable(); // null = gratis
            $table->string('satuan_harga')->nullable(); // "/ hari", "/ jam", dll
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('urutan')->default(0); // untuk sorting tampilan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fasilitas');
    }
};
