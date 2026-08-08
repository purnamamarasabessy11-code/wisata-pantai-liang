@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="page-header">
        <div>
            <h1>Dashboard</h1>
            <p>Ringkasan konten website Pantai Liang.</p>
        </div>
    </div>

    <div class="stat-grid">
        <div class="stat-card">
            <div class="num">{{ $stats['galeri'] }}</div>
            <div class="lbl">Foto Galeri</div>
        </div>
        <div class="stat-card">
            <div class="num">{{ $stats['ulasan'] }}</div>
            <div class="lbl">Ulasan Pengunjung</div>
        </div>
        <div class="stat-card">
            <div class="num">{{ $stats['fasilitas'] }}</div>
            <div class="lbl">Fasilitas</div>
        </div>
        <div class="stat-card">
            <div class="num">{{ $stats['tiket'] }}</div>
            <div class="lbl">Jenis Tiket</div>
        </div>
        <div class="stat-card">
            <div class="num">{{ $stats['rata_rating'] ?: '–' }} ⭐</div>
            <div class="lbl">Rata-rata Rating</div>
        </div>
    </div>

    <div class="card">
        <h2 style="font-family:'Fraunces',serif; font-size:1.1rem; color:var(--ocean-dark); margin-bottom:1rem;">Ulasan Terbaru</h2>

        @if ($ulasanTerbaru->isEmpty())
            <div class="empty">Belum ada ulasan masuk.</div>
        @else
            <table>
                <thead>
                    <tr><th>Nama</th><th>Rating</th><th>Komentar</th><th>Tanggal</th></tr>
                </thead>
                <tbody>
                    @foreach ($ulasanTerbaru as $u)
                        <tr>
                            <td>{{ $u->nama }}</td>
                            <td>{{ str_repeat('⭐', $u->rating_aman) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($u->komentar, 60) }}</td>
                            <td>{{ $u->created_at->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="margin-top:1rem;">
                <a href="{{ route('admin.ulasan.index') }}" class="btn btn-secondary btn-sm">Lihat semua ulasan →</a>
            </div>
        @endif
    </div>
@endsection
