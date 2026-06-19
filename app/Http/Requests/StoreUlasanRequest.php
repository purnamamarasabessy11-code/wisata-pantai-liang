<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUlasanRequest extends FormRequest
{
    /**
     * Form publik, semua pengunjung boleh mengirim ulasan.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Aturan validasi — batas panjang disamakan dengan
     * maxlength di form HTML (nama: 40, komentar: 400).
     */
    public function rules(): array
    {
        return [
            'nama'     => ['required', 'string', 'max:40'],
            'rating'   => ['required', 'integer', 'between:1,5'],
            'komentar' => ['required', 'string', 'max:400'],
        ];
    }

    /**
     * Pesan error berbahasa Indonesia, senada dengan alert() versi lama
     * ("Mohon isi nama dan ulasan Anda.").
     */
    public function messages(): array
    {
        return [
            'nama.required'     => 'Mohon isi nama Anda.',
            'nama.max'          => 'Nama maksimal 40 karakter.',
            'rating.required'   => 'Mohon pilih rating.',
            'rating.between'    => 'Rating tidak valid.',
            'komentar.required' => 'Mohon isi ulasan Anda.',
            'komentar.max'      => 'Ulasan maksimal 400 karakter.',
        ];
    }
}
