@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
    <!-- Tambahan CSS khusus mobile (tidak akan memengaruhi desktop) -->
    <style>
        @media (max-width: 768px) {
            .stat-grid {
                display: grid !important;
                grid-template-columns: repeat(2, 1fr) !important; /* 2 kolom di tablet/HP layar besar */
                gap: 1rem;
            }
            .table-responsive {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            .table-responsive table {
                min-width: 550px; /* Memaksa tabel agar tidak menyempit/berantakan */
            }
            .page-header h1 {
                font-size: 1.5rem;
            }
        }
        @media (max-width: 480px) {
            .stat-grid {
                grid-template-columns: 1fr !important; /* 1 kolom penuh di HP layar kecil */
            }
        }
    </style>

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
            <!-- Tabel dibungkus agar bisa di-scroll horizontal di HP -->
            <div class="table-responsive">
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
            </div>

            <div style="margin-top:1rem;">
                <a href="{{ route('admin.ulasan.index') }}" class="btn btn-secondary btn-sm">Lihat semua ulasan →</a>
            </div>
        @endif
    </div>
@endsection
