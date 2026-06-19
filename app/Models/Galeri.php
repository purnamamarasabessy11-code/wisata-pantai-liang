<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'category',
        'alt_text',
        'caption',
        'overlay_caption',
        'strip_caption',
        'order',
        'is_featured',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'order'       => 'integer',
    ];

    /**
     * Label kategori yang rapi untuk ditampilkan (ov-tag / cap-tag).
     * "rumah-adat" -> "Rumah Adat", "pantai" -> "Pantai"
     */
    protected function categoryLabel(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
            get: fn () => str($this->category)
                ->replace('-', ' ')
                ->title()
                ->toString(),
        );
    }

    /**
     * Full URL gambar, setara asset('namafile.jpeg') di Blade lama.
     */
    protected function imageUrl(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
            get: fn () => asset($this->image_path),
        );
    }

    /**
     * Scope: hanya item batch pertama (langsung tampil).
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope: urutkan sesuai kolom 'order', lalu id sebagai tie-breaker.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('id');
    }

    /**
     * Scope: filter berdasarkan kategori (dipakai untuk tombol filter galeri).
     */
    public function scopeCategory($query, ?string $category)
    {
        return $category && $category !== 'semua'
            ? $query->where('category', $category)
            : $query;
    }
}
