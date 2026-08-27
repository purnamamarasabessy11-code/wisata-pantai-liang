<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hasil Pencarian – Pantai Liang</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,600;1,9..144,300;1,9..144,400&family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,600;6..12,700&display=swap" rel="stylesheet">

<style>
:root {
    --sky:        #e8f4fd;
    --sky-mid:    #cce9f9;
    --ocean:      #1a9bbf;
    --ocean-deep: #0f7a9a;
    --ocean-dark: #0d5f78;
    --teal:       #2dbfb8;
    --teal-light: #e0f7f6;
    --sand:       #f9f3e8;
    --sand-dark:  #e8d9c0;
    --coral:      #ff7f6e;
    --coral-soft: #fff0ee;
    --gold:       #f5c842;
    --white:      #ffffff;
    --ink:        #1c3a4a;
    --ink-soft:   #2e5468;
    --text-mid:   #4a7a90;
    --text-muted: #7ba8ba;
    --border:     rgba(26,155,191,0.15);
    --green:      #16a34a;
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body {
    background: var(--sand);
    color: var(--ink);
    font-family: 'Nunito Sans', sans-serif;
    overflow-x: hidden;
}
::-webkit-scrollbar { width: 5px; }
::-webkit-scrollbar-track { background: var(--sky); }
::-webkit-scrollbar-thumb { background: var(--ocean); border-radius: 3px; }

/* ── NAVBAR ── */
.navbar {
    position: fixed; top: 0; width: 100%;
    background: rgba(255,255,255,0.92);
    backdrop-filter: blur(20px);
    z-index: 1000; padding: 0 5rem; height: 68px;
    display: flex; align-items: center;
    box-shadow: 0 1px 0 var(--border), 0 4px 24px rgba(26,155,191,0.07);
}
.nav-container { max-width: 1200px; margin: 0 auto; width: 100%; display: flex; justify-content: space-between; align-items: center; }
.nav-logo { font-family: 'Fraunces', serif; font-size: 1.3rem; font-weight: 400; color: var(--ink); text-decoration: none; display: flex; align-items: center; gap: 0.5rem; }
.nav-logo strong { color: var(--ocean); font-weight: 600; }
.nav-menu { display: flex; list-style: none; gap: 0.3rem; margin: 0; padding: 0; align-items: center; }
.nav-link { color: var(--ink-soft); text-decoration: none; font-size: 0.82rem; font-weight: 500; padding: 0.45rem 0.9rem; border-radius: 50px; transition: all 0.2s; }
.nav-link:hover { background: var(--sky); color: var(--ocean); }
@media (max-width: 768px) {
    .navbar { padding: 0 1.5rem; }
    .nav-menu { display: none; }
}

/* ── SEARCH HERO ── */
.hero {
    position: relative;
    padding: 8.5rem 1.5rem 3.5rem;
    background:
        radial-gradient(ellipse 900px 480px at 15% -10%, rgba(45,191,184,0.16), transparent 60%),
        radial-gradient(ellipse 700px 420px at 100% 0%, rgba(26,155,191,0.14), transparent 55%),
        var(--sand);
    overflow: hidden;
}
.hero-ripple {
    position: absolute; border-radius: 50%;
    border: 1.5px solid rgba(26,155,191,0.12);
}
.hero-ripple.r1 { width: 420px; height: 420px; top: -180px; right: -120px; }
.hero-ripple.r2 { width: 620px; height: 620px; top: -320px; right: -220px; }
.hero-ripple.r3 { width: 260px; height: 260px; bottom: -140px; left: -80px; border-color: rgba(45,191,184,0.14); }

.hero-inner { position: relative; max-width: 680px; margin: 0 auto; z-index: 2; }
.back-btn {
    position: fixed; left: 1.5rem; bottom: 1.5rem;
    display: inline-flex; align-items: center; gap: 0.5rem;
    background: var(--ocean); color: white; text-decoration: none;
    padding: 0.65rem 1.4rem; border-radius: 50px;
    font-size: 0.82rem; font-weight: 600;
    box-shadow: 0 6px 20px rgba(26,155,191,0.35);
    transition: 0.25s; z-index: 100;
    font-family: 'Nunito Sans', sans-serif;
}
.back-btn:hover { background: var(--ocean-deep); transform: translateY(-2px); box-shadow: 0 10px 28px rgba(26,155,191,0.4); }

.eyebrow {
    display: flex; align-items: center; gap: 0.7rem;
    font-size: 0.68rem; font-weight: 700; letter-spacing: 0.22em;
    text-transform: uppercase; color: var(--ocean); margin-bottom: 0.6rem;
}
.eyebrow::before { content:''; width:24px; height:2px; background:var(--teal); border-radius:1px; }

.page-title {
    font-family: 'Fraunces', serif;
    font-size: clamp(1.9rem, 4.5vw, 2.6rem);
    font-weight: 300; color: var(--ink); line-height: 1.1;
    letter-spacing: -0.01em;
}
.page-title em { color: var(--ocean); font-style: italic; }
.page-sub { font-size: 0.9rem; color: var(--text-mid); margin: 0.6rem 0 2rem; }

.cari-form {
    position: relative; display: flex; align-items: center;
    background: var(--white); border: 1.5px solid var(--sand-dark);
    border-radius: 50px; padding: 0.4rem 0.4rem 0.4rem 1.4rem;
    box-shadow: 0 10px 34px rgba(26,155,191,0.1);
    transition: border-color 0.25s, box-shadow 0.25s;
}
.cari-form:focus-within { border-color: var(--ocean); box-shadow: 0 12px 38px rgba(26,155,191,0.2); }
.cari-form-icon { color: var(--text-muted); font-size: 1rem; flex-shrink: 0; transition: color 0.25s; }
.cari-form:focus-within .cari-form-icon { color: var(--ocean); }
.cari-form input {
    flex: 1; min-width: 0; border: none; background: transparent; outline: none;
    padding: 0.85rem 0.8rem;
    font-family: 'Nunito Sans', sans-serif; font-size: 0.95rem; color: var(--ink);
}
.cari-form input::placeholder { color: var(--text-muted); }
.cari-form button {
    flex-shrink: 0; display: inline-flex; align-items: center; gap: 0.45rem;
    background: linear-gradient(135deg, var(--ocean), var(--ocean-deep));
    color: white; border: none; border-radius: 50px;
    height: 3rem; padding: 0 1.5rem;
    font-family: 'Nunito Sans', sans-serif; font-weight: 700;
    font-size: 0.86rem; letter-spacing: 0.01em; cursor: pointer;
    box-shadow: 0 8px 20px rgba(26,155,191,0.35);
    transition: transform 0.2s, box-shadow 0.2s, background 0.2s;
}
.cari-form button .btn-icon { font-size: 0.95rem; transition: transform 0.3s; }
.cari-form button:hover { transform: translateY(-2px); box-shadow: 0 12px 26px rgba(26,155,191,0.42); }
.cari-form button:hover .btn-icon { transform: translateX(2px); }
.cari-form button:active { transform: translateY(0); }

@media (max-width: 480px) {
    .cari-form button span.btn-label { display: none; }
    .cari-form button { width: 3rem; padding: 0; justify-content: center; }
    .cari-form button .btn-icon { font-size: 1.05rem; }
}

.quick-tags { display: flex; flex-wrap: wrap; align-items: center; gap: 0.5rem; margin-top: 1.3rem; }
.quick-tags-label { font-size: 0.75rem; font-weight: 600; color: var(--text-muted); margin-right: 0.2rem; }
.quick-tag {
    font-size: 0.75rem; font-weight: 600; color: var(--ocean-dark);
    background: var(--sky); border: 1px solid var(--sky-mid);
    border-radius: 50px; padding: 0.35rem 0.85rem; text-decoration: none;
    transition: background 0.2s, transform 0.2s;
}
.quick-tag:hover { background: var(--teal-light); transform: translateY(-1px); }

/* ── MAIN ── */
.main { max-width: 680px; margin: 0 auto; padding: 2.5rem 1.5rem 6rem; }
@media (min-width: 640px) { .main { padding-left: 2.5rem; padding-right: 2.5rem; } }

.result-count { font-size: 0.78rem; font-weight: 600; letter-spacing: 0.04em; color: var(--text-muted); margin-bottom: 1.2rem; }
.result-count strong { color: var(--ocean-dark); }

.hasil-list { display: flex; flex-direction: column; gap: 0.9rem; }

.hasil-item {
    display: flex; align-items: center; gap: 1.1rem;
    background: var(--white); border: 1.5px solid var(--sand-dark);
    border-radius: 18px; padding: 1.1rem 1.3rem;
    text-decoration: none; color: inherit; position: relative; overflow: hidden;
    transition: box-shadow 0.25s, border-color 0.25s, transform 0.25s;
    animation: riseIn 0.4s ease backwards;
}
.hasil-item::before {
    content: ''; position: absolute; top: 0; bottom: 0; left: 0; width: 4px;
    opacity: 0; transition: opacity 0.25s;
}
.hasil-item:hover { box-shadow: 0 14px 40px rgba(26,155,191,0.14); border-color: rgba(26,155,191,0.35); transform: translateY(-3px); }
.hasil-item:hover::before { opacity: 1; }

/* kategori accent colors */
.hasil-item.kat-fasilitas::before, .hasil-item.kat-fasilitas .hi-icon { background: var(--ocean); }
.hasil-item.kat-fasilitas .hi-icon { background: var(--sky); border-color: var(--sky-mid); }
.hasil-item.kat-galeri::before { background: var(--coral); }
.hasil-item.kat-galeri .hi-icon { background: var(--coral-soft); border-color: rgba(255,127,110,0.25); }
.hasil-item.kat-rute::before { background: var(--teal); }
.hasil-item.kat-rute .hi-icon { background: var(--teal-light); border-color: rgba(45,191,184,0.3); }
.hasil-item.kat-ulasan::before { background: var(--gold); }
.hasil-item.kat-ulasan .hi-icon { background: #fdf6e0; border-color: rgba(245,200,66,0.4); }
.hasil-item.kat-default::before { background: var(--ocean); }
.hasil-item.kat-default .hi-icon { background: var(--sky); border-color: var(--sky-mid); }

.hi-icon {
    width: 46px; height: 46px; flex-shrink: 0; border-radius: 13px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.3rem; border: 1px solid transparent;
}
.hi-body { flex: 1; min-width: 0; }
.hi-cat { font-size: 0.63rem; letter-spacing: 0.12em; text-transform: uppercase; color: var(--ocean); font-weight: 700; margin-bottom: 0.2rem; }
.hi-judul { font-family: 'Fraunces', serif; font-size: 1.05rem; font-weight: 400; color: var(--ink); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.hi-desc { font-size: 0.8rem; color: var(--text-muted); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; margin-top: 0.1rem; }
.hi-arrow {
    color: var(--text-muted); flex-shrink: 0; font-size: 1.1rem;
    transition: transform 0.25s, color 0.25s;
}
.hasil-item:hover .hi-arrow { transform: translateX(4px); color: var(--ocean); }

@keyframes riseIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
.hasil-list .hasil-item:nth-child(1) { animation-delay: 0.02s; }
.hasil-list .hasil-item:nth-child(2) { animation-delay: 0.07s; }
.hasil-list .hasil-item:nth-child(3) { animation-delay: 0.12s; }
.hasil-list .hasil-item:nth-child(4) { animation-delay: 0.17s; }
.hasil-list .hasil-item:nth-child(5) { animation-delay: 0.22s; }
.hasil-list .hasil-item:nth-child(n+6) { animation-delay: 0.27s; }

/* ── EMPTY STATE ── */
.hasil-kosong {
    text-align: center; padding: 3.5rem 1.8rem;
    background: var(--white); border-radius: 22px;
    border: 1.5px dashed var(--sand-dark); color: var(--text-mid);
}
.hk-icon {
    width: 72px; height: 72px; margin: 0 auto 1.2rem;
    border-radius: 50%; background: var(--sky);
    display: flex; align-items: center; justify-content: center;
    font-size: 2rem;
}
.hk-title { font-family: 'Fraunces', serif; font-size: 1.2rem; color: var(--ink); margin-bottom: 0.5rem; }
.hk-title strong { color: var(--ocean); font-weight: 600; }
.hk-desc { font-size: 0.85rem; color: var(--text-muted); margin-bottom: 1.4rem; }
.hk-suggest { display: flex; flex-wrap: wrap; justify-content: center; gap: 0.5rem; }

/* ── IDLE STATE (belum ada kata kunci) ── */
.idle-state { text-align: center; padding: 3rem 1.5rem; }
.idle-icon { font-size: 2.6rem; margin-bottom: 1rem; opacity: 0.85; }
.idle-title { font-family: 'Fraunces', serif; font-size: 1.15rem; color: var(--ink-soft); margin-bottom: 0.4rem; }
.idle-desc { font-size: 0.85rem; color: var(--text-muted); }
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-container">
        <a href="/" class="nav-logo">🏖 Pantai <strong>Liang</strong></a>
        <ul class="nav-menu">
            <li><a href="/" class="nav-link">Beranda</a></li>
            <li><a href="/panduan_rute" class="nav-link">🗺 Panduan Rute</a></li>
            <li><a href="{{ route('fasilitas') }}" class="nav-link">Fasilitas</a></li>
            <li><a href="/#galeri" class="nav-link">Galeri</a></li>
        </ul>
    </div>
</nav>

<!-- SEARCH HERO -->
<section class="hero">
    <div class="hero-ripple r2"></div>
    <div class="hero-ripple r1"></div>
    <div class="hero-ripple r3"></div>

    <div class="hero-inner">
        <div class="eyebrow">Cari di Pantai Liang</div>
        <h1 class="page-title">
            @if($q) Hasil untuk <em>"{{ $q }}"</em>
            @else Apa yang kamu <em>cari</em>? @endif
        </h1>
        <p class="page-sub">
            @if($q && count($hasil)) {{ count($hasil) }} hasil ditemukan untuk pencarianmu
            @elseif($q) Kami tidak menemukan hasil yang cocok
            @else Telusuri fasilitas, rute perjalanan, galeri, dan ulasan pengunjung @endif
        </p>

        <form class="cari-form" method="GET" action="{{ route('cari') }}">
            <span class="cari-form-icon">🔍</span>
            <input type="text" name="q" value="{{ $q }}" placeholder="Cari fasilitas, rute, aktivitas..." autofocus>
            <button type="submit">
                <span class="btn-label">Cari</span>
                <span class="btn-icon">→</span>
            </button>
        </form>

        @if(!$q)
            <div class="quick-tags">
                <span class="quick-tags-label">Populer:</span>
                <a href="{{ route('cari', ['q' => 'parkir']) }}" class="quick-tag">🅿️ Parkir</a>
                <a href="{{ route('cari', ['q' => 'rute']) }}" class="quick-tag">🗺️ Rute</a>
                <a href="{{ route('cari', ['q' => 'toilet']) }}" class="quick-tag">🚻 Toilet</a>
                <a href="{{ route('cari', ['q' => 'warung makan']) }}" class="quick-tag">🍽️ warung makan</a>
            </div>
        @endif
    </div>
</section>

<!-- MAIN -->
<div class="main">
    @if($q && count($hasil))
        <div class="result-count"><strong>{{ count($hasil) }}</strong> hasil ditemukan</div>
        <div class="hasil-list">
            @foreach($hasil as $h)
                @php
                    $katSlug = match($h['kategori']) {
                        'Fasilitas' => 'kat-fasilitas',
                        'Galeri Foto' => 'kat-galeri',
                        'Panduan Rute' => 'kat-rute',
                        'Ulasan Pengunjung' => 'kat-ulasan',
                        default => 'kat-default',
                    };
                @endphp
                <a href="{{ $h['url'] }}" class="hasil-item {{ $katSlug }}">
                    <div class="hi-icon">{{ $h['ikon'] }}</div>
                    <div class="hi-body">
                        <div class="hi-cat">{{ $h['kategori'] }}</div>
                        <div class="hi-judul">{{ $h['judul'] }}</div>
                        @if($h['deskripsi'])
                            <div class="hi-desc">{{ $h['deskripsi'] }}</div>
                        @endif
                    </div>
                    <span class="hi-arrow">→</span>
                </a>
            @endforeach
        </div>
    @elseif($q)
        <div class="hasil-kosong">
            <div class="hk-icon">🔎</div>
            <div class="hk-title">Tidak ada hasil untuk <strong>"{{ $q }}"</strong></div>
            <div class="hk-desc">Coba periksa ejaan.</div>
            <div class="hk-suggest">
                <a href="{{ route('cari', ['q' => 'parkir']) }}" class="quick-tag">🅿️ Parkir</a>
                <a href="{{ route('cari', ['q' => 'rute']) }}" class="quick-tag">🗺️ Rute</a>
                <a href="{{ route('cari', ['q' => 'toilet']) }}" class="quick-tag">🚻 Toilet</a>
                <a href="{{ route('cari', ['q' => 'Warung makan']) }}" class="quick-tag">🍽️ Warung makan</a>
            </div>
        </div>
    @else
        <div class="idle-state">
            <div class="idle-icon">🌊</div>
            <div class="idle-title">Mulai pencarianmu</div>
            <div class="idle-desc">Ketik kata kunci di atas untuk menjelajahi Pantai Liang</div>
        </div>
    @endif
</div>

<!-- BACK -->
<a href="/" class="back-btn">← Kembali ke Beranda</a>

</body>
</html>
