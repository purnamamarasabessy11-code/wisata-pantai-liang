@extends('admin.layout')

@section('title', $galeri->exists ? 'Ubah Foto' : 'Tambah Foto')

@section('content')
    <div class="page-header">
        <div>
            <h1>{{ $galeri->exists ? 'Ubah Foto Galeri' : 'Tambah Foto Galeri' }}</h1>
        </div>
        <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">← Kembali</a>
    </div>

    <div class="card">
        <form method="POST"
              action="{{ $galeri->exists ? route('admin.galeri.update', $galeri) : route('admin.galeri.store') }}"
              enctype="multipart/form-data">
            @csrf
            @if ($galeri->exists) @method('PUT') @endif

            <div class="form-grid">
                <div class="field full">
                    <label for="foto">Foto {{ $galeri->exists ? '(kosongkan jika tidak diganti)' : '' }}</label>
                    <input type="file" id="foto" name="foto" accept="image/*" {{ $galeri->exists ? '' : 'required' }}>
                    @if ($galeri->exists)
                        <div style="margin-top:0.6rem;">
                            <img src="{{ $galeri->image_url }}" alt="{{ $galeri->alt_text }}" style="width:120px; border-radius:10px; object-fit:cover;">
                        </div>
                    @endif
                </div>

                <div class="field">
                    <label for="category">Kategori</label>
                    <select id="category" name="category" required>
                        @foreach ($kategoriList as $kat)
                            <option value="{{ $kat }}" {{ old('category', $galeri->category) === $kat ? 'selected' : '' }}>
                                {{ ucwords(str_replace('-', ' ', $kat)) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="field">
                    <label for="order">Urutan Tampil</label>
                    <input type="number" id="order" name="order" min="0" value="{{ old('order', $galeri->order ?? 0) }}">
                </div>

                <div class="field full">
                    <label for="alt_text">Alt Text (deskripsi gambar untuk aksesibilitas)</label>
                    <input type="text" id="alt_text" name="alt_text" value="{{ old('alt_text', $galeri->alt_text) }}">
                </div>

                <div class="field full">
                    <label for="caption">Caption Lengkap (tampil di lightbox)</label>
                    <textarea id="caption" name="caption">{{ old('caption', $galeri->caption) }}</textarea>
                </div>

                <div class="field">
                    <label for="overlay_caption">Caption Overlay (saat hover)</label>
                    <input type="text" id="overlay_caption" name="overlay_caption" value="{{ old('overlay_caption', $galeri->overlay_caption) }}">
                </div>

                <div class="field">
                    <label for="strip_caption">Caption Strip (bawah kartu)</label>
                    <input type="text" id="strip_caption" name="strip_caption" value="{{ old('strip_caption', $galeri->strip_caption) }}">
                </div>

                <div class="field full checkbox-row">
                    <input type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $galeri->is_featured ?? true) ? 'checked' : '' }}>
                    <label for="is_featured" style="margin:0;">Tampilkan langsung (featured), bukan di balik "Lihat Lebih Banyak"</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">{{ $galeri->exists ? 'Simpan Perubahan' : 'Tambah Foto' }}</button>
        </form>
    </div>
@endsection
