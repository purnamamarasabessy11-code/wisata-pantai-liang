<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'rating',
        'komentar',
    ];

    protected $casts = [
        'rating' => 'integer',
    ];

    /**
     * Inisial nama untuk avatar bulat, mis. "Budi" -> "B".
     */
    protected function inisial(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
            get: fn () => mb_strtoupper(mb_substr(trim($this->nama) ?: '?', 0, 1)),
        );
    }

    /**
     * Rating dijamin antara 1-5 (jaga-jaga data lama/invalid).
     */
    protected function ratingAman(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
            get: fn () => max(1, min(5, (int) $this->rating)),
        );
    }

    /**
     * String bintang terisi, mis. rating 4 -> "⭐⭐⭐⭐"
     */
    protected function bintangTerisi(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
            get: fn () => str_repeat('⭐', $this->rating_aman),
        );
    }

    /**
     * String bintang kosong, mis. rating 4 -> "☆"
     */
    protected function bintangKosong(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
            get: fn () => str_repeat('☆', 5 - $this->rating_aman),
        );
    }

    /**
     * Tanggal terformat ala Indonesia, mis. "19 Juni 2026"
     * (setara new Date(u.waktu).toLocaleDateString('id-ID', {day, month: 'long', year}))
     *
     * Dipetakan manual (bukan ->locale('id')->translatedFormat()) supaya
     * tidak bergantung pada locale 'id' terpasang di server.
     */
    protected function tanggalIndo(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
            get: function () {
                static $bulan = [
                    1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
                    5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
                    9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember',
                ];

                return $this->created_at->day . ' ' . $bulan[$this->created_at->month] . ' ' . $this->created_at->year;
            },
        );
    }

    /**
     * Scope: urutan terbaru lebih dulu (unshift di versi localStorage).
     */
    public function scopeTerbaru($query)
    {
        return $query->orderByDesc('created_at');
    }
}
