@extends('admin.layout')

@section('title', 'Fasilitas')

@section('content')
    <div class="page-header">
        <div>
            <h1>Fasilitas</h1>
            <p>{{ $items->total() }} fasilitas tersimpan.</p>
        </div>
        <a href="{{ route('admin.fasilitas.create') }}" class="btn btn-primary">+ Tambah Fasilitas</a>
    </div>

    <div class="card" style="padding:0;">
        @if ($items->isEmpty())
            <div class="empty">Belum ada data fasilitas.</div>
        @else
            <table>
    <thead>
        <tr><th>Foto</th><th>Nama</th><th>Tipe</th><th>Harga</th><th>Urutan</th><th>Status</th><th></th></tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            <tr>
                <td>
                    @if ($item->gambar)
                        <img src="{{ $item->gambar_url }}" alt="{{ $item->nama }}" class="thumb">
                    @else
                        <span style="font-size:1.6rem;">{{ $item->icon }}</span>
                    @endif
                </td>
                <td>{{ $item->icon }} {{ $item->nama }}</td>
                <td>{{ $item->badge_label }}</td>
                <td>{{ $item->harga_format ?? 'Gratis' }} {{ $item->satuan_harga }}</td>
                <td>{{ $item->urutan }}</td>
                <td>
                    <span class="badge {{ $item->is_active ? 'badge-on' : 'badge-off' }}">
                        {{ $item->is_active ? 'Aktif' : 'Nonaktif' }}
                    </span>
                </td>
                <td>
                    <div class="actions">
                        <a href="{{ route('admin.fasilitas.edit', $item) }}" class="btn btn-secondary btn-sm">Ubah</a>
                        <form action="{{ route('admin.fasilitas.destroy', $item) }}" method="POST" onsubmit="return confirm('Hapus fasilitas ini?');">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
        @endif
    </div>

    <div style="margin-top:1rem;">{{ $items->links() }}</div>
@endsection
