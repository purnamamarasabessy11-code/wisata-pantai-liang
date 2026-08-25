@extends('admin.layout')

@section('title', $tiket->exists ? 'Ubah Tiket' : 'Tambah Tiket')

@section('content')
    <!-- Tambahan CSS khusus mobile (tidak akan memengaruhi desktop) -->
    <style>
        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            .page-header h1 {
                font-size: 1.4rem; /* Mengecilkan ukuran font judul di layar kecil */
                line-height: 1.3;
            }
            .btn-primary {
                width: 100%; /* Tombol simpan menjadi lebar penuh agar mudah ditekan jari */
                justify-content: center;
                padding: 0.8rem;
                font-size: 1rem;
                margin-top: 0.5rem;
            }
            .checkbox-row {
                align-items: flex-start; /* Mencegah checkbox tertekan jika teks panjang/turun baris */
            }
            .checkbox-row label {
                line-height: 1.5;
                margin-top: 2px !important;
            }
        }
    </style>

    <div class="page-header">
        <div>
            <h1>{{ $tiket->exists ? 'Ubah Informasi Tiket' : 'Tambah Informasi Tiket' }}</h1>
        </div>
        <a href="{{ route('admin.tiket.index') }}" class="btn btn-secondary">← Kembali</a>
    </div>

    <div class="card">
        <form method="POST"
              action="{{ $tiket->exists ? route('admin.tiket.update', $tiket) : route('admin.tiket.store') }}">
            @csrf
            @if ($tiket->exists) @method('PUT') @endif

            <div class="form-grid">
                <div class="field">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama', $tiket->nama) }}" placeholder="Tiket Masuk" required>
                </div>

                <div class="field">
                    <label for="icon">Icon (emoji)</label>
                    <input type="text" id="icon" name="icon" value="{{ old('icon', $tiket->icon) }}" placeholder="👨">
                </div>

                <div class="field">
                    <label for="kategori">Kategori</label>
                    <select id="kategori" name="kategori" required>
                        @foreach (['tiket_masuk' => 'Tiket Masuk', 'parkir' => 'Parkir', 'wahana' => 'Wahana', 'lainnya' => 'Lainnya'] as $val => $label)
                            <option value="{{ $val }}" {{ old('kategori', $tiket->kategori) === $val ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="field">
                    <label for="harga">Harga (Rp, isi 0 jika gratis)</label>
                    <input type="number" id="harga" name="harga" min="0" value="{{ old('harga', $tiket->harga ?? 0) }}" required>
                </div>

                <div class="field">
                    <label for="satuan">Satuan</label>
                    <input type="text" id="satuan" name="satuan" value="{{ old('satuan', $tiket->satuan) }}" placeholder="/ orang">
                </div>

                <div class="field">
                    <label for="urutan">Urutan Tampil</label>
                    <input type="number" id="urutan" name="urutan" min="0" value="{{ old('urutan', $tiket->urutan ?? 0) }}">
                </div>

                <div class="field full">
                    <label for="deskripsi">Deskripsi / Keterangan</label>
                    <textarea id="deskripsi" name="deskripsi">{{ old('deskripsi', $tiket->deskripsi) }}</textarea>
                </div>

                <div class="field full checkbox-row">
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $tiket->is_active ?? true) ? 'checked' : '' }}>
                    <label for="is_active" style="margin:0;">Aktif (tampil di halaman informasi tiket)</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">{{ $tiket->exists ? 'Simpan Perubahan' : 'Tambah Tiket' }}</button>
        </form>
    </div>
@endsection
