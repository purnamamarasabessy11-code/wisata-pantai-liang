@extends('admin.layout')

@section('title', 'Ulasan')

@section('content')
    <div class="page-header">
        <div>
            <h1>Ulasan Pengunjung</h1>
            <p>{{ $items->total() }} ulasan masuk. Ulasan dikirim langsung oleh pengunjung dari halaman profil — admin hanya bisa memoderasi (hapus).</p>
        </div>
    </div>

    <div class="card" style="padding:0;">
        @if ($items->isEmpty())
            <div class="empty">Belum ada ulasan masuk.</div>
        @else
            <table>
                <thead>
                    <tr><th>Nama</th><th>Rating</th><th>Komentar</th><th>Tanggal</th><th></th></tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ str_repeat('⭐', $item->rating_aman) }}</td>
                            <td>{{ $item->komentar }}</td>
                            <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <form action="{{ route('admin.ulasan.destroy', $item) }}" method="POST" onsubmit="return confirm('Hapus ulasan ini?');">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <div style="margin-top:1rem;">{{ $items->links() }}</div>
@endsection
