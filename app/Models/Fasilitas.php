<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';

    protected $fillable = [
        'nama',
        'deskripsi',
        'tipe',
        'icon',
        'gambar',
        'harga',
        'satuan_harga',
        'is_active',
        'urutan',
    ];

    protected $casts = [
        'harga'     => 'integer',
        'is_active' => 'boolean',
    ];

    public function scopeTipe($query, string $tipe)
    {
        return $tipe === 'all' ? $query : $query->where('tipe', $tipe);
    }

    public function scopeAktif($query)
    {
        return $query->where('is_active', true);
    }

    public function getHargaFormatAttribute(): ?string
    {
        return $this->harga ? 'Rp ' . number_format($this->harga, 0, ',', '.') : null;
    }

    public function getBadgeLabelAttribute(): string
    {
        return match ($this->tipe) {
            'gratis' => '✅ Gratis',
            'bayar'  => '💳 Berbayar',
            'wahana' => '🎡 Wahana',
            default  => '',
        };
    }

    /**
     * URL gambar fasilitas untuk ditampilkan di card & modal.
     * Null kalau belum diunggah, supaya tampilan bisa fallback ke icon emoji.
     */
    protected function gambarUrl(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
            get: fn () => $this->gambar ? asset($this->gambar) : null,
        );
    }
}
