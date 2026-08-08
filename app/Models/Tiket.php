<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'icon',
        'harga',
        'satuan',
        'kategori',
        'is_active',
        'urutan',
    ];

    protected $casts = [
        'harga'     => 'integer',
        'is_active' => 'boolean',
    ];

    public function scopeAktif($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeUrut($query)
    {
        return $query->orderBy('urutan')->orderBy('id');
    }

    // Accessor format harga rupiah, misal: "Rp 15.000" atau "Gratis"
    public function getHargaFormatAttribute(): string
    {
        return $this->harga > 0
            ? 'Rp ' . number_format($this->harga, 0, ',', '.')
            : 'Gratis';
    }

    // Label kategori yang rapi untuk ditampilkan
    public function getKategoriLabelAttribute(): string
    {
        return match ($this->kategori) {
            'tiket_masuk' => 'Tiket Masuk',
            'parkir'      => 'Parkir',
            'wahana'      => 'Wahana',
            default       => 'Lainnya',
        };
    }
}
