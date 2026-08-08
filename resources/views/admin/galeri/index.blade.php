@extends('admin.layout')

@section('title', 'Galeri')

@section('content')
    <div class="page-header">
        <div>
            <h1>Galeri Foto</h1>
            <p>{{ $items->total() }} foto tersimpan.</p>
        </div>
        <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary">+ Tambah Foto</a>
    </div>

    <div class="card" style="padding:0;">
        @if ($items->isEmpty())
            <div class="empty">Belum ada foto galeri. Klik "Tambah Foto" untuk mulai.</div>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Foto</th><th>Kategori</th><th>Caption</th><th>Urutan</th><th>Featured</th><th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td><img src="{{ $item->image_url }}" alt="{{ $item->alt_text }}" class="thumb"></td>
                            <td>{{ $item->category_label }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($item->caption ?? $item->strip_caption, 40) }}</td>
                            <td>{{ $item->order }}</td>
                            <td>
                                <span class="badge {{ $item->is_featured ? 'badge-on' : 'badge-off' }}">
                                    {{ $item->is_featured ? 'Ya' : 'Tidak' }}
                                </span>
                            </td>
                            <td>
                                <div class="actions">
                                    <a href="{{ route('admin.galeri.edit', $item) }}" class="btn btn-secondary btn-sm">Ubah</a>
                                    <form action="{{ route('admin.galeri.destroy', $item) }}" method="POST" onsubmit="return confirm('Hapus foto ini?');">
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
