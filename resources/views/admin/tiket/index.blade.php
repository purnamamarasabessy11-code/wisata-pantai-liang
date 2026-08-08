@extends('admin.layout')

@section('title', 'Informasi Tiket')

@section('content')
    <div class="page-header">
        <div>
            <h1>Informasi Tiket</h1>
            <p>{{ $items->total() }} jenis tiket / biaya tersimpan.</p>
        </div>
        <a href="{{ route('admin.tiket.create') }}" class="btn btn-primary">+ Tambah Tiket</a>
    </div>

    <div class="card" style="padding:0;">
        @if ($items->isEmpty())
            <div class="empty">Belum ada informasi tiket.</div>
        @else
            <table>
                <thead>
                    <tr><th>Nama</th><th>Kategori</th><th>Harga</th><th>Urutan</th><th>Status</th><th></th></tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kategori_label }}</td>
                            <td>{{ $item->harga_format }} {{ $item->satuan }}</td>
                            <td>{{ $item->urutan }}</td>
                            <td>
                                <span class="badge {{ $item->is_active ? 'badge-on' : 'badge-off' }}">
                                    {{ $item->is_active ? 'Aktif' : 'Nonaktif' }}
                                </span>
                            </td>
                            <td>
                                <div class="actions">
                                    <a href="{{ route('admin.tiket.edit', $item) }}" class="btn btn-secondary btn-sm">Ubah</a>
                                    <form action="{{ route('admin.tiket.destroy', $item) }}" method="POST" onsubmit="return confirm('Hapus data tiket ini?');">
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
