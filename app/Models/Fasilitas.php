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
        'harga',
        'satuan_harga',
        'is_active',
        'urutan',
    ];

    protected $casts = [
        'harga'     => 'integer',
        'is_active' => 'boolean',
    ];

    // Scope untuk filter berdasarkan tipe
    public function scopeTipe($query, string $tipe)
    {
        return $tipe === 'all' ? $query : $query->where('tipe', $tipe);
    }

    public function scopeAktif($query)
    {
        return $query->where('is_active', true);
    }

    // Accessor format harga rupiah, misal: "Rp 150.000"
    public function getHargaFormatAttribute(): ?string
    {
        return $this->harga ? 'Rp ' . number_format($this->harga, 0, ',', '.') : null;
    }

    // Label badge sesuai tipe
    public function getBadgeLabelAttribute(): string
    {
        return match ($this->tipe) {
            'gratis' => '✅ Gratis',
            'bayar'  => '💳 Berbayar',
            'wahana' => '🎡 Wahana',
            default  => '',
        };
    }
}
