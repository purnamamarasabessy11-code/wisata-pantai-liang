@extends('admin.layout')

@section('title', $fasilitas->exists ? 'Ubah Fasilitas' : 'Tambah Fasilitas')

@section('content')
    <div class="page-header">
        <div>
            <h1>{{ $fasilitas->exists ? 'Ubah Fasilitas' : 'Tambah Fasilitas' }}</h1>
        </div>
        <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-secondary">← Kembali</a>
    </div>

    <div class="card">
        <form method="POST"
              action="{{ $fasilitas->exists ? route('admin.fasilitas.update', $fasilitas) : route('admin.fasilitas.store') }}">
            @csrf
            @if ($fasilitas->exists) @method('PUT') @endif

            <div class="form-grid">
                <div class="field">
                    <label for="nama">Nama Fasilitas</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama', $fasilitas->nama) }}" required>
                </div>

                <div class="field">
                    <label for="icon">Icon (emoji)</label>
                    <input type="text" id="icon" name="icon" value="{{ old('icon', $fasilitas->icon) }}" placeholder="🅿️">
                </div>

                <div class="field full">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" required>{{ old('deskripsi', $fasilitas->deskripsi) }}</textarea>
                </div>

                <div class="field">
                    <label for="tipe">Tipe</label>
                    <select id="tipe" name="tipe" required>
                        @foreach (['gratis' => 'Gratis', 'bayar' => 'Berbayar', 'wahana' => 'Wahana'] as $val => $label)
                            <option value="{{ $val }}" {{ old('tipe', $fasilitas->tipe) === $val ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="field">
                    <label for="urutan">Urutan Tampil</label>
                    <input type="number" id="urutan" name="urutan" min="0" value="{{ old('urutan', $fasilitas->urutan ?? 0) }}">
                </div>

                <div class="field">
                    <label for="harga">Harga (kosongkan jika gratis)</label>
                    <input type="number" id="harga" name="harga" min="0" value="{{ old('harga', $fasilitas->harga) }}">
                </div>

                <div class="field">
                    <label for="satuan_harga">Satuan Harga</label>
                    <input type="text" id="satuan_harga" name="satuan_harga" value="{{ old('satuan_harga', $fasilitas->satuan_harga) }}" placeholder="/ hari">
                </div>

                <div class="field full checkbox-row">
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $fasilitas->is_active ?? true) ? 'checked' : '' }}>
                    <label for="is_active" style="margin:0;">Aktif (tampil di halaman fasilitas)</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">{{ $fasilitas->exists ? 'Simpan Perubahan' : 'Tambah Fasilitas' }}</button>
        </form>
    </div>
@endsection
