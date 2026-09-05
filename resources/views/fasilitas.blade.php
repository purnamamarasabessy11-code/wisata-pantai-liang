<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fasilitas – Pantai Liang</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,600;1,9..144,300;1,9..144,400&family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,600&display=swap" rel="stylesheet">

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
    background: var(--white);
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
.nav-container {
    max-width: 1200px; margin: 0 auto; width: 100%;
    display: flex; justify-content: space-between; align-items: center;
}
.nav-logo {
    font-family: 'Fraunces', serif;
    font-size: 1.3rem; font-weight: 400;
    color: var(--ink); text-decoration: none;
    display: flex; align-items: center; gap: 0.5rem;
}
.nav-logo strong { color: var(--ocean); font-weight: 600; }
.nav-menu {
    display: flex; list-style: none;
    gap: 0.3rem; margin: 0; padding: 0; align-items: center;
}
.nav-link {
    color: var(--ink-soft); text-decoration: none;
    font-size: 0.82rem; font-weight: 500;
    padding: 0.45rem 0.9rem; border-radius: 50px;
    transition: all 0.2s;
}
.nav-link:hover { background: var(--sky); color: var(--ocean); }
.nav-link.active { background: var(--sky); color: var(--ocean); font-weight: 600; }

@media (max-width: 768px) {
    .navbar { padding: 0.8rem 1.5rem; height: auto; }
    .nav-container { flex-direction: column; gap: 0.8rem; }
    .nav-menu { flex-wrap: wrap; justify-content: center; gap: 0.4rem; }
    .nav-link { font-size: 0.75rem; padding: 0.4rem 0.7rem; }
}

/* ── HERO ── */
.hero {
    position: relative; height: 360px;
    display: flex; flex-direction: column; justify-content: flex-end;
    overflow: hidden; padding-top: 68px;
}
.hero-img {
    position: absolute; inset: 0;
    background: url('{{ asset('n.jpeg') }}') center/cover no-repeat;
}
.hero-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to bottom, rgba(10,30,45,0.25) 0%, rgba(10,30,45,0.6) 65%, rgba(10,30,45,0.82) 100%);
}
.hero-ray  { position:absolute; top:0; left:18%; width:2px; height:100%; background:linear-gradient(to bottom,rgba(255,255,255,0.15),transparent); transform:rotate(-5deg); animation:ray 5s ease-in-out infinite; }
.hero-ray2 { position:absolute; top:0; left:32%; width:1px; height:100%; background:linear-gradient(to bottom,rgba(255,255,255,0.08),transparent); transform:rotate(-2deg); animation:ray 7s ease-in-out infinite reverse; }
@keyframes ray { 0%,100%{opacity:.5} 50%{opacity:1} }

.hero-wave { position: absolute; bottom: 0; left: 0; right: 0; }

.hero-badges {
    position: absolute; top: 90px; left: 5rem;
    display: flex; gap: 0.6rem; z-index: 4;
}
.badge-pill {
    display: inline-flex; align-items: center; gap: 0.4rem;
    padding: 0.35rem 0.9rem;
    background: rgba(255,255,255,0.18); backdrop-filter: blur(12px);
    border: 1px solid rgba(255,255,255,0.35); border-radius: 50px;
    font-size: 0.7rem; font-weight: 600; letter-spacing: 0.1em;
    text-transform: uppercase; color: white;
}
.badge-pill .dot {
    width: 5px; height: 5px; border-radius: 50%; background: var(--gold);
    animation: blink 2s ease infinite;
}
@keyframes blink { 0%,100%{opacity:1} 50%{opacity:.2} }

.hero-content { position: relative; z-index: 4; padding: 0 5rem 3rem; }
.hero-eyebrow {
    font-size: 0.7rem; letter-spacing: 0.2em; text-transform: uppercase;
    color: rgba(255,255,255,0.7); font-weight: 500; margin-bottom: 0.8rem;
    display: flex; align-items: center; gap: 0.8rem;
}
.hero-eyebrow::before { content:''; width:24px; height:1px; background:rgba(255,255,255,0.5); }
.hero-title {
    font-family: 'Fraunces', serif;
    font-size: clamp(2.2rem, 4.5vw, 4rem);
    font-weight: 300; line-height: 1.05; color: white; letter-spacing: -0.02em;
}
.hero-title em { font-style: italic; color: #a8eae7; }
.hero-sub { margin-top: 0.6rem; font-size: 0.9rem; color: rgba(255,255,255,0.65); font-weight: 300; }

@media (max-width: 768px) {
    .hero { height: auto; min-height: 320px; padding-top: 100px; justify-content: flex-end; }
    .hero-badges { position: relative; top: 0; left: 0; margin: 0 1.5rem 1.5rem; }
    .hero-content { padding: 0 1.5rem 2.5rem; }
    .hero-title { font-size: clamp(2rem, 8vw, 3rem); }
}

/* ── MAIN ── */
.main {
    max-width: 1200px; margin: 0 auto;
    padding: 3.5rem 5rem 7rem;
}
@media (max-width: 768px) {
    .main { padding: 2rem 1.5rem 6rem; }
}

/* ── STAT CHIPS ── */
.stats-row { display: flex; gap: 1rem; flex-wrap: wrap; margin-bottom: 2.5rem; }
.stat-chip {
    flex: 1; min-width: 130px;
    background: var(--sand); border: 1.5px solid var(--sand-dark);
    border-radius: 14px; padding: 1rem 1.2rem; text-align: center;
    transition: 0.25s;
}
.stat-chip:hover { border-color: var(--ocean); background: var(--sky); }
.stat-num {
    font-family: 'Fraunces', serif;
    font-size: 2rem; font-weight: 300; color: var(--ocean); line-height: 1;
}
.stat-label {
    font-size: 0.68rem; font-weight: 600; letter-spacing: 0.1em;
    text-transform: uppercase; color: var(--text-muted); margin-top: 0.2rem;
}

@media (max-width: 768px) {
    .stats-row {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.8rem;
        margin-bottom: 2rem;
    }
    .stat-chip { min-width: 0; padding: 1rem 0.5rem; }
    .stat-num { font-size: 1.7rem; }
}

/* ── FILTER ── */
.filter-bar { display: flex; align-items: center; gap: 1rem; flex-wrap: wrap; margin-bottom: 0.5rem; }
.filter-label { font-size: 0.72rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; color: var(--text-muted); }
.filter-pills { display: flex; gap: 0.5rem; flex-wrap: wrap; }
.filter-btn {
    padding: 0.4rem 1.2rem;
    border: 1.5px solid var(--sand-dark); border-radius: 50px;
    font-size: 0.77rem; font-weight: 600; letter-spacing: 0.04em;
    color: var(--text-mid); background: none; cursor: pointer;
    transition: all 0.22s; font-family: 'Nunito Sans', sans-serif;
}
.filter-btn:hover { border-color: var(--ocean); color: var(--ocean); background: var(--sky); }
.filter-btn.active { border-color: var(--ocean); color: white; background: var(--ocean); }

@media (max-width: 768px) {
    .filter-pills { gap: 0.4rem; }
    .filter-btn { padding: 0.35rem 0.9rem; font-size: 0.7rem; }
}

.divider {
    height: 1.5px;
    background: linear-gradient(90deg, transparent, var(--sand-dark), transparent);
    border: none; margin: 0.8rem 0;
}

/* ── SECTION HEADING ── */
.sec-head {
    display: flex; align-items: flex-end; justify-content: space-between;
    margin: 2.4rem 0 1.8rem;
}
.sec-eyebrow {
    display: flex; align-items: center; gap: 0.7rem;
    font-size: 0.68rem; font-weight: 600; letter-spacing: 0.22em;
    text-transform: uppercase; color: var(--ocean); margin-bottom: 0.35rem;
}
.sec-eyebrow::before { content:''; width:24px; height:2px; background:var(--teal); border-radius:1px; }
.sec-title { font-family:'Fraunces',serif; font-size:1.7rem; font-weight:300; color:var(--ink); }
.sec-title em { font-style:italic; color:var(--ocean); }
.sec-count {
    font-family:'Fraunces',serif; font-size:2.8rem; font-weight:300;
    color:var(--sky-mid); line-height:1;
}
@media (max-width:768px) {
    .sec-head { flex-direction: column; align-items: flex-start; margin: 1.5rem 0; gap: 0.5rem; }
    .sec-count { display: none; }
    .sec-title { font-size: 1.5rem; }
}

/* ── GRID ── */
.grid {
    display: grid;
    /* Penyesuaian responsif pelindung lay-out mobile agar kotak fit di layar sekecil apapun */
    grid-template-columns: repeat(auto-fill, minmax(min(100%, 230px), 1fr));
    gap: 1.3rem;
}

/* ── CARD ── */
.card {
    background: var(--white);
    border: 1.5px solid var(--sand-dark);
    border-radius: 20px; padding: 1.7rem 1.5rem 1.5rem;
    text-align: center; position: relative; overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
}
.card::before {
    content: ''; position: absolute; top: 0; left: 1.5rem; right: 1.5rem;
    height: 3px; border-radius: 0 0 3px 3px;
    opacity: 0; transition: opacity 0.3s;
}
.card.type-gratis::before  { background: linear-gradient(90deg, var(--teal), #4ade80); }
.card.type-bayar::before   { background: linear-gradient(90deg, var(--ocean), var(--teal)); }
.card.type-wahana::before  { background: linear-gradient(90deg, var(--coral), #f97316); }

.card:hover { transform: translateY(-6px); box-shadow: 0 16px 48px rgba(26,155,191,0.12); border-color: rgba(26,155,191,0.3); }
.card:hover::before { opacity: 1; }

.card-icon {
    width: 60px; height: 60px; border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.8rem; margin: 0 auto 1rem;
}
.card.type-gratis .card-icon  { background: #dcfce7; }
.card.type-bayar  .card-icon  { background: var(--sky); }
.card.type-wahana .card-icon  { background: var(--coral-soft); }

.card-badge {
    display: inline-flex; align-items: center; gap: 0.3rem;
    padding: 0.25rem 0.8rem; border-radius: 50px;
    font-size: 0.65rem; font-weight: 700; letter-spacing: 0.08em;
    text-transform: uppercase; margin-bottom: 0.7rem;
}
.card.type-gratis .card-badge  { background: #dcfce7; color: var(--green); }
.card.type-bayar  .card-badge  { background: var(--sky); color: var(--ocean-deep); }
.card.type-wahana .card-badge  { background: var(--coral-soft); color: var(--coral); }

.card-title {
    font-family: 'Fraunces', serif;
    font-size: 1.05rem; font-weight: 400; color: var(--ink); margin-bottom: 0.4rem;
}
.card-desc { font-size: 0.85rem; color: var(--text-mid); line-height: 1.65; }
.card-price {
    display: inline-block; margin-top: 0.7rem;
    font-family: 'Fraunces', serif; font-size: 1.05rem; font-weight: 400;
    color: var(--ocean-dark);
}
.card-price small { font-size: 0.73rem; color: var(--text-muted); }

.card.hidden { display: none; }

/* ── EMPTY STATE ── */
.empty-state { grid-column: 1/-1; text-align: center; padding: 3rem; display: none; }
.empty-state.show { display: block; }

/* ── BACK BUTTON ── */
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

@media (max-width: 768px) {
    .back-btn {
        left: 50%;
        bottom: 1.5rem;
        transform: translateX(-50%);
        width: max-content;
    }
    .back-btn:hover {
        transform: translate(-50%, -2px);
    }
}

/* ── FADE IN ── */
@keyframes fadeIn { from{opacity:0;transform:translateY(12px)} to{opacity:1;transform:translateY(0)} }
/* ── MODAL DETAIL FASILITAS ── */
.card { cursor: pointer; }

.fm-backdrop {
    position: fixed; inset: 0; z-index: 2000;
    background: rgba(10,30,45,0.55);
    backdrop-filter: blur(6px);
    opacity: 0; pointer-events: none;
    transition: opacity 0.25s ease;
}
.fm-backdrop.open { opacity: 1; pointer-events: all; }

.fasilitas-modal {
    position: fixed; top: 50%; left: 50%;
    transform: translate(-50%, -46%);
    z-index: 2001;
    width: 92%; max-width: 480px;
    background: var(--white);
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 32px 80px rgba(10,40,60,0.25);
    opacity: 0; pointer-events: none;
    transition: opacity 0.25s ease, transform 0.28s cubic-bezier(.22,1,.36,1);
}
.fasilitas-modal.open {
    opacity: 1; pointer-events: all;
    transform: translate(-50%, -50%);
}

.fm-close {
    position: absolute; top: 0.8rem; right: 0.8rem; z-index: 2;
    width: 34px; height: 34px; border-radius: 50%;
    background: rgba(255,255,255,0.85); border: none;
    font-size: 1rem; color: var(--ink); cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    box-shadow: 0 4px 14px rgba(0,0,0,0.15);
}
.fm-close:hover { background: var(--white); }

.fm-image-wrap {
    position: relative; width: 100%; height: 240px;
    background: var(--sky);
}
.fm-image-wrap img { width: 100%; height: 100%; object-fit: cover; display: block; }
.fm-image-placeholder {
    width: 100%; height: 100%;
    display: none; align-items: center; justify-content: center;
    font-size: 4rem; background: var(--sky);
}

.fm-body { padding: 1.4rem 1.6rem 1.6rem; }
.fm-badge {
    display: inline-flex; padding: 0.25rem 0.8rem; border-radius: 50px;
    font-size: 0.65rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase;
    background: var(--sky); color: var(--ocean-deep); margin-bottom: 0.7rem;
}
.fm-title { font-family: 'Fraunces', serif; font-size: 1.35rem; font-weight: 400; color: var(--ink); margin-bottom: 0.5rem; }
.fm-desc { font-size: 0.9rem; line-height: 1.7; color: var(--text-mid); }
.fm-price {
    display: inline-block; margin-top: 1rem;
    font-family: 'Fraunces', serif; font-size: 1.15rem; color: var(--ocean-dark);
}
.fm-price small { font-size: 0.75rem; color: var(--text-muted); }

@media (max-width: 600px) {
    .fasilitas-modal { width: 94%; }
    .fm-image-wrap { height: 190px; }
}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-container">
        <a href="/" class="nav-logo">🏖 Pantai <strong>Liang</strong></a>
        <ul class="nav-menu">
            <li><a href="/"class="nav-link">Beranda</a></li>
            <li><a href="/panduan_rute" class="nav-link">🗺 Panduan Rute</a></li>
            <li><a href="{{ route('fasilitas') }}" class="nav-link active">tampilan</a></li>
            <li><a href="/#galeri" class="nav-link">Galeri</a></li>
        </ul>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="hero-img"></div>
    <div class="hero-overlay"></div>
    <div class="hero-ray"></div>
    <div class="hero-ray2"></div>

    <div class="hero-wave">
        <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,35 C360,70 1080,0 1440,40 L1440,70 L0,70 Z" fill="#ffffff"/>
        </svg>
    </div>

    <div class="hero-badges">
        <div class="badge-pill"><span class="dot"></span>Pantai Liang</div>
        <div class="badge-pill">Maluku Tengah</div>
    </div>

    <div class="hero-content">
        <div class="hero-eyebrow">Panduan Wisatawan</div>
        <h1 class="hero-title">Fasilitas &<br><em>Wahana</em></h1>
        <p class="hero-sub">Temukan semua layanan yang tersedia di Pantai Liang</p>
    </div>
</section>

<!-- MAIN -->
<div class="main">

    <!-- Stats (dinamis dari controller) -->
    <div class="stats-row">
        <div class="stat-chip">
            <div class="stat-num">{{ $stats['gratis'] }}</div>
            <div class="stat-label">Fasilitas Gratis</div>
        </div>
        <div class="stat-chip">
            <div class="stat-num">{{ $stats['bayar'] }}</div>
            <div class="stat-label">Fasilitas Berbayar</div>
        </div>
        <div class="stat-chip">
            <div class="stat-num">{{ $stats['wahana'] }}</div>
            <div class="stat-label">Wahana Seru</div>
        </div>
        <div class="stat-chip">
            <div class="stat-num">{{ $stats['total'] }}</div>
            <div class="stat-label">Total Layanan</div>
        </div>
    </div>

    <!-- Filter -->
    <div class="filter-bar">
        <span class="filter-label">Filter :</span>
        <div class="filter-pills">
            <button class="filter-btn active" onclick="filterCard('all',this)">🌴 Semua</button>
            <button class="filter-btn" onclick="filterCard('gratis',this)">✅ Gratis</button>
            <button class="filter-btn" onclick="filterCard('bayar',this)">💳 Berbayar</button>
            <button class="filter-btn" onclick="filterCard('wahana',this)">🎡 Wahana</button>
        </div>
    </div>
    <hr class="divider">

    <!-- Section heading -->
    <div class="sec-head">
        <div>
            <div class="sec-eyebrow" id="sEyebrow">Semua Layanan</div>
            <h2 class="sec-title" id="sTitle">Fasilitas & <em>Wahana</em></h2>
        </div>
        <div class="sec-count" id="sCount">{{ $stats['total'] }}</div>
    </div>

    <!-- Cards (looping dari database) -->
    <div class="grid" id="cardGrid">

       @forelse($fasilitas as $item)
    <div class="card type-{{ $item->tipe }}"
         data-type="{{ $item->tipe }}"
         data-nama="{{ $item->nama }}"
         data-deskripsi="{{ $item->deskripsi }}"
         data-badge="{{ $item->badge_label }}"
         data-icon="{{ $item->icon }}"
         data-gambar="{{ $item->gambar_url }}"
         data-harga="{{ $item->harga_format }}"
         data-satuan="{{ $item->satuan_harga }}"
         onclick="openFasilitasModal(this)">
        <div class="card-icon">{{ $item->icon }}</div>
        <div class="card-badge">{{ $item->badge_label }}</div>
        <div class="card-title">{{ $item->nama }}</div>
        <div class="card-desc">{{ $item->deskripsi }}</div>
        @if($item->harga)
            <div class="card-price">
                {{ $item->harga_format }} <small>{{ $item->satuan_harga }}</small>
            </div>
        @endif
    </div>
@empty
    <p style="grid-column:1/-1; text-align:center; color:var(--text-muted);">
        Belum ada data fasilitas.
    </p>
@endforelse

        <!-- Empty state untuk hasil filter JS -->
        <div class="empty-state" id="emptyState">
            <div style="font-size:3rem;margin-bottom:1rem">🏖️</div>
            <p style="font-size:1rem;color:var(--text-muted)">Tidak ada fasilitas ditemukan.</p>
        </div>

    </div>
</div>

<!-- BACK -->
<!-- MODAL DETAIL FASILITAS -->
<div class="fm-backdrop" id="fmBackdrop" onclick="closeFasilitasModal()"></div>
<div class="fasilitas-modal" id="fasilitasModal">
    <button class="fm-close" onclick="closeFasilitasModal()">✕</button>
    <div class="fm-image-wrap">
        <img src="" alt="" id="fmImage" style="display:none;">
        <div class="fm-image-placeholder" id="fmImagePlaceholder"></div>
    </div>
    <div class="fm-body">
        <div class="fm-badge" id="fmBadge"></div>
        <h3 class="fm-title" id="fmTitle"></h3>
        <p class="fm-desc" id="fmDesc"></p>
        <div class="fm-price" id="fmPrice"></div>
    </div>
</div>
<a href="/" class="back-btn">← Kembali ke Beranda</a>

<script>
const titleMap = {
    all:    { ey:'Semua Layanan',     t:'Fasilitas & <em>Wahana</em>', n:{{ $stats['total'] }} },
    gratis: { ey:'Fasilitas Gratis',  t:'<em>Gratis</em> Untukmu',     n:{{ $stats['gratis'] }} },
    bayar:  { ey:'Fasilitas Berbayar',t:'Layanan <em>Berbayar</em>',   n:{{ $stats['bayar'] }} },
    wahana: { ey:'Wahana Seru',       t:'Wahana & <em>Aktivitas</em>', n:{{ $stats['wahana'] }} },
};

function filterCard(type, btn) {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const m = titleMap[type];
    document.getElementById('sEyebrow').textContent = m.ey;
    document.getElementById('sTitle').innerHTML     = m.t;
    document.getElementById('sCount').textContent   = m.n;

    let vis = 0;
    document.querySelectorAll('.card[data-type]').forEach(card => {
        const match = type === 'all' || card.dataset.type === type;
        if (match) {
            card.classList.remove('hidden');
            card.style.animation = 'none';
            card.offsetHeight; // reflow
            card.style.animation = 'fadeIn 0.35s ease forwards';
            vis++;
        } else {
            card.classList.add('hidden');
        }
    });
    document.getElementById('emptyState').classList.toggle('show', vis === 0);
}
function openFasilitasModal(card) {
    const nama      = card.dataset.nama;
    const deskripsi = card.dataset.deskripsi;
    const badge     = card.dataset.badge;
    const icon      = card.dataset.icon;
    const gambar    = card.dataset.gambar;
    const harga     = card.dataset.harga;
    const satuan    = card.dataset.satuan;

    document.getElementById('fmTitle').textContent = nama;
    document.getElementById('fmDesc').textContent  = deskripsi;
    document.getElementById('fmBadge').textContent = badge;

    const img         = document.getElementById('fmImage');
    const placeholder = document.getElementById('fmImagePlaceholder');

    if (gambar) {
        img.src = gambar;
        img.style.display = 'block';
        placeholder.style.display = 'none';
    } else {
        img.style.display = 'none';
        placeholder.style.display = 'flex';
        placeholder.textContent = icon || '🏖️';
    }

    const priceEl = document.getElementById('fmPrice');
    if (harga) {
        priceEl.style.display = 'inline-block';
        priceEl.innerHTML = harga + ' <small>' + (satuan || '') + '</small>';
    } else {
        priceEl.style.display = 'none';
    }

    document.getElementById('fmBackdrop').classList.add('open');
    document.getElementById('fasilitasModal').classList.add('open');
    document.body.style.overflow = 'hidden';
}

function closeFasilitasModal() {
    document.getElementById('fmBackdrop').classList.remove('open');
    document.getElementById('fasilitasModal').classList.remove('open');
    document.body.style.overflow = '';
}

document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeFasilitasModal();
});
</script>

</body>
</html>
