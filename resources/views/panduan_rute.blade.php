<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Panduan Rute – Pantai Liang</title>

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
    .navbar { padding: 0 1.5rem; }
    .nav-menu { gap: 0.1rem; }
    .nav-link { font-size: 0.72rem; padding: 0.35rem 0.55rem; }
}

/* ── HERO ── */
.hero {
    position: relative; height: 360px;
    display: flex; flex-direction: column; justify-content: flex-end;
    overflow: hidden; padding-top: 68px;
}
.hero-img {
    position: absolute; inset: 0;
    background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=1800&q=85') center/cover no-repeat;
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
    .hero { height: 300px; }
    .hero-badges { top: 78px; left: 1.5rem; }
    .hero-content { padding: 0 1.5rem 2.5rem; }
}

/* ── MAIN ── */
.main {
    max-width: 1200px; margin: 0 auto;
    padding: 3.5rem 5rem 7rem;
}
@media (max-width: 768px) { .main { padding: 2.5rem 1.5rem 6rem; } }

/* ── INFO CHIPS ROW ── */
.info-row {
    display: flex; gap: 1rem; flex-wrap: wrap;
    margin-bottom: 2.8rem;
}
.info-chip {
    flex: 1; min-width: 140px;
    background: var(--sand); border: 1.5px solid var(--sand-dark);
    border-radius: 14px; padding: 1rem 1.2rem;
    display: flex; align-items: center; gap: 0.8rem;
    transition: 0.25s;
}
.info-chip:hover { border-color: var(--ocean); background: var(--sky); }
.info-chip-icon {
    width: 44px; height: 44px; border-radius: 12px;
    background: var(--sky-mid); display: flex;
    align-items: center; justify-content: center; font-size: 1.3rem;
    flex-shrink: 0;
}
.info-chip-text {}
.info-chip-val {
    font-family: 'Fraunces', serif;
    font-size: 1.1rem; font-weight: 400; color: var(--ink); line-height: 1.1;
}
.info-chip-label {
    font-size: 0.68rem; font-weight: 600; letter-spacing: 0.1em;
    text-transform: uppercase; color: var(--text-muted); margin-top: 0.15rem;
}

/* ── TWO-COL LAYOUT ── */
.rute-layout {
    display: grid;
    grid-template-columns: 1fr 360px;
    gap: 2rem;
    align-items: flex-start;
}
@media (max-width: 900px) {
    .rute-layout { grid-template-columns: 1fr; }
}

/* ── MAP CARD ── */
.map-card {
    border-radius: 20px; overflow: hidden;
    border: 1.5px solid var(--sand-dark);
    box-shadow: 0 16px 50px rgba(26,155,191,0.1);
    position: relative;
}
.map-card iframe {
    width: 100%; height: 480px; border: none; display: block;
}

/* floating action buttons on map */
.map-actions {
    position: absolute; bottom: 1.2rem; right: 1.2rem;
    display: flex; flex-direction: column; gap: 0.6rem;
    z-index: 10;
}
.map-btn {
    display: inline-flex; align-items: center; gap: 0.5rem;
    padding: 0.6rem 1.2rem;
    border: none; border-radius: 50px; cursor: pointer;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 0.8rem; font-weight: 700;
    box-shadow: 0 6px 20px rgba(0,0,0,0.18);
    text-decoration: none; transition: 0.25s;
    white-space: nowrap;
}
.map-btn-nav {
    background: var(--ocean); color: white;
}
.map-btn-nav:hover { background: var(--ocean-deep); transform: translateY(-2px); box-shadow: 0 10px 26px rgba(26,155,191,0.35); }
.map-btn-wa {
    background: #25d366; color: white;
}
.map-btn-wa:hover { background: #1ebe5d; transform: translateY(-2px); box-shadow: 0 10px 26px rgba(37,211,102,0.35); }

/* ── SIDEBAR ── */
.sidebar { display: flex; flex-direction: column; gap: 1.3rem; }

/* section eyebrow */
.side-eyebrow {
    display: flex; align-items: center; gap: 0.7rem;
    font-size: 0.68rem; font-weight: 600; letter-spacing: 0.22em;
    text-transform: uppercase; color: var(--ocean); margin-bottom: 0.4rem;
}
.side-eyebrow::before { content:''; width:24px; height:2px; background:var(--teal); border-radius:1px; }
.side-title {
    font-family: 'Fraunces', serif;
    font-size: 1.5rem; font-weight: 300; color: var(--ink);
    margin-bottom: 1.2rem;
}
.side-title em { font-style: italic; color: var(--ocean); }

/* ── STEP CARD ── */
.step-list { display: flex; flex-direction: column; gap: 0; }
.step {
    display: flex; gap: 1rem; align-items: flex-start;
    padding: 1.1rem 0;
    border-bottom: 1px solid var(--sand-dark);
    position: relative;
}
.step:last-child { border-bottom: none; }
.step-num-wrap { position: relative; flex-shrink: 0; }
.step-num {
    width: 36px; height: 36px; border-radius: 50%;
    background: var(--sky); border: 2px solid var(--ocean);
    display: flex; align-items: center; justify-content: center;
    font-family: 'Fraunces', serif;
    font-size: 0.95rem; font-weight: 600; color: var(--ocean);
}
/* vertical connector line */
.step:not(:last-child) .step-num-wrap::after {
    content: '';
    position: absolute; top: 38px; left: 50%; transform: translateX(-50%);
    width: 2px; height: calc(100% + 0.5rem);
    background: linear-gradient(to bottom, var(--sky-mid), transparent);
}
.step-body {}
.step-place {
    font-family: 'Fraunces', serif;
    font-size: 1rem; font-weight: 400; color: var(--ink); margin-bottom: 0.2rem;
}
.step-desc { font-size: 0.82rem; color: var(--text-mid); line-height: 1.6; }
.step-tag {
    display: inline-flex; align-items: center; gap: 0.3rem;
    margin-top: 0.4rem;
    padding: 0.2rem 0.7rem;
    background: var(--sky); border-radius: 50px;
    font-size: 0.65rem; font-weight: 600; color: var(--ocean);
    letter-spacing: 0.06em;
}

/* ── TIP BOX ── */
.tip-box {
    background: var(--teal-light);
    border: 1.5px solid rgba(45,191,184,0.3);
    border-radius: 16px; padding: 1.2rem 1.3rem;
}
.tip-header {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.72rem; font-weight: 700; letter-spacing: 0.1em;
    text-transform: uppercase; color: var(--ocean-dark);
    margin-bottom: 0.7rem;
}
.tip-header .tip-icon { font-size: 1rem; }
.tip-list { display: flex; flex-direction: column; gap: 0.5rem; }
.tip-item {
    display: flex; align-items: flex-start; gap: 0.5rem;
    font-size: 0.82rem; color: var(--ink-soft); line-height: 1.5;
}
.tip-item::before { content: '•'; color: var(--teal); font-size: 1rem; flex-shrink: 0; line-height: 1.4; }

/* ── TRANSPORT CARD ── */
.transport-card {
    background: var(--sand);
    border: 1.5px solid var(--sand-dark);
    border-radius: 16px; padding: 1.2rem 1.3rem;
}
.transport-title {
    font-family: 'Fraunces', serif;
    font-size: 1rem; font-weight: 400; color: var(--ink);
    margin-bottom: 0.9rem;
}
.transport-options { display: flex; flex-direction: column; gap: 0.7rem; }
.transport-row {
    display: flex; align-items: center; gap: 0.8rem;
    font-size: 0.84rem;
}
.t-icon {
    width: 36px; height: 36px; border-radius: 10px;
    background: var(--white); display: flex;
    align-items: center; justify-content: center;
    font-size: 1.1rem; flex-shrink: 0;
    border: 1.5px solid var(--sand-dark);
}
.t-info {}
.t-name { font-weight: 600; color: var(--ink); font-size: 0.84rem; }
.t-desc { font-size: 0.75rem; color: var(--text-muted); }

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
</style>
</head>
<body>

<!-- ── NAVBAR ── -->
<nav class="navbar">
    <div class="nav-container">
        <a href="/" class="nav-logo">🏖 Pantai <strong>Liang</strong></a>
        <ul class="nav-menu">
            <li><a href="/#Beranda"    class="nav-link">Beranda</a></li>
            <li><a href="/#keunikan"   class="nav-link">Keunikan</a></li>
            <li><a href="/panduan_rute" class="nav-link active">🗺 Panduan Rute</a></li>
            <li><a href="/fasilitas"   class="nav-link">Fasilitas</a></li>
            <li><a href="/#galeri"     class="nav-link">Galeri</a></li>
        </ul>
    </div>
</nav>

<!-- ── HERO ── -->
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
        <div class="badge-pill"><span class="dot"></span>Panduan Wisatawan</div>
        <div class="badge-pill">Maluku Tengah</div>
    </div>

    <div class="hero-content">
        <div class="hero-eyebrow">Navigasi & Transportasi</div>
        <h1 class="hero-title">Panduan<br><em>Rute</em></h1>
        <p class="hero-sub">Dari Kota Ambon menuju Pantai Liang · ±40 km · 60–90 menit</p>
    </div>
</section>

<!-- ── MAIN ── -->
<div class="main">

    <!-- Info chips -->
    <div class="info-row">
        <div class="info-chip">
            <div class="info-chip-icon">📍</div>
            <div class="info-chip-text">
                <div class="info-chip-val">Desa Liang</div>
                <div class="info-chip-label">Lokasi Tujuan</div>
            </div>
        </div>
        <div class="info-chip">
            <div class="info-chip-icon">🛣️</div>
            <div class="info-chip-text">
                <div class="info-chip-val">±40 km</div>
                <div class="info-chip-label">Jarak dari Ambon</div>
            </div>
        </div>
        <div class="info-chip">
            <div class="info-chip-icon">⏱️</div>
            <div class="info-chip-text">
                <div class="info-chip-val">60–90 menit</div>
                <div class="info-chip-label">Waktu Tempuh</div>
            </div>
        </div>
        <div class="info-chip">
            <div class="info-chip-icon">🕗</div>
            <div class="info-chip-text">
                <div class="info-chip-val">08.00 – 18.00</div>
                <div class="info-chip-label">Jam Buka (WIT)</div>
            </div>
        </div>
    </div>

    <!-- Two-column layout: Map + Sidebar -->
    <div class="rute-layout">

        <!-- MAP -->
        <div>
            <div class="map-card">
                <iframe
                    src="https://www.google.com/maps?q=Pantai+Liang+Maluku&output=embed"
                    allowfullscreen loading="lazy">
                </iframe>

                <div class="map-actions">
                    <a href="https://www.google.com/maps/dir/?api=1&destination=Pantai+Liang+Maluku" target="_blank" class="map-btn map-btn-nav">
                        🗺️ Mulai Navigasi
                    </a>
                    <a id="wa-share" href="#" target="_blank" class="map-btn map-btn-wa">
                        💬 Bagikan ke WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <!-- SIDEBAR -->
        <div class="sidebar">

            <!-- Langkah rute -->
            <div>
                <div class="side-eyebrow">Langkah demi Langkah</div>
                <h2 class="side-title">Rute <em>Perjalanan</em></h2>

                <div class="step-list">
                    <div class="step">
                        <div class="step-num-wrap">
                            <div class="step-num">1</div>
                        </div>
                        <div class="step-body">
                            <div class="step-place">Terminal Mardika, Ambon</div>
                            <div class="step-desc">Titik keberangkatan utama dari pusat kota Ambon. Tersedia angkutan umum menuju arah Salahutu.</div>
                            <div class="step-tag">🚌 Titik Awal</div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-num-wrap">
                            <div class="step-num">2</div>
                        </div>
                        <div class="step-body">
                            <div class="step-place">Jalan Trans Salahutu</div>
                            <div class="step-desc">Ikuti jalur utama Ambon–Salahutu. Jalan beraspal dengan pemandangan pegunungan dan laut di sisi kanan.</div>
                            <div class="step-tag">🛣️ ±25 km</div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-num-wrap">
                            <div class="step-num">3</div>
                        </div>
                        <div class="step-body">
                            <div class="step-place">Pertigaan Desa Liang</div>
                            <div class="step-desc">Belok ke arah papan penunjuk "Pantai Liang / Hunimua". Ikuti jalan desa sejauh ±2 km.</div>
                            <div class="step-tag">↩️ Belok Kanan</div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-num-wrap">
                            <div class="step-num">4</div>
                        </div>
                        <div class="step-body">
                            <div class="step-place">Pantai Liang (Hunimua) ✅</div>
                            <div class="step-desc">Tiba di area parkir utama. Beli tiket di loket masuk dan nikmati keindahan pantai!</div>
                            <div class="step-tag">🏖️ Tujuan</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transport options -->
            <div class="transport-card">
                <div class="transport-title">🚗 Pilihan Transportasi</div>
                <div class="transport-options">
                    <div class="transport-row">
                        <div class="t-icon">🚗</div>
                        <div class="t-info">
                            <div class="t-name">Kendaraan Pribadi</div>
                            <div class="t-desc">Paling fleksibel · ±60 menit dari pusat kota</div>
                        </div>
                    </div>
                    <div class="transport-row">
                        <div class="t-icon">🏍️</div>
                        <div class="t-info">
                            <div class="t-name">Sepeda Motor</div>
                            <div class="t-desc">Praktis & hemat · jalan mulus sepanjang rute</div>
                        </div>
                    </div>
                    <div class="transport-row">
                        <div class="t-icon">🚌</div>
                        <div class="t-info">
                            <div class="t-name">Angkutan Umum</div>
                            <div class="t-desc">Dari Terminal Mardika · turun di pertigaan Liang</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tips box -->
            <div class="tip-box">
                <div class="tip-header">
                    <span class="tip-icon">💡</span> Tips Perjalanan
                </div>
                <div class="tip-list">
                    <div class="tip-item">Berangkat pagi hari (sebelum jam 09.00) untuk menghindari kemacetan dan mendapat spot terbaik.</div>
                    <div class="tip-item">Isi bahan bakar di SPBU Kota Ambon — tidak ada pom bensin di dekat lokasi.</div>
                    <div class="tip-item">Bawa uang tunai secukupnya karena belum ada mesin ATM di kawasan pantai.</div>
                    <div class="tip-item">Aktifkan Google Maps atau Waze sebelum berangkat untuk petunjuk arah real-time.</div>
                </div>
            </div>

        </div><!-- /sidebar -->
    </div><!-- /rute-layout -->
</div><!-- /main -->

<!-- BACK -->
<a href="/" class="back-btn">← Kembali ke Beranda</a>

<script>
    // WhatsApp share — sama persis logika asli
    const waBtn = document.getElementById('wa-share');
    const text  = '🌴 Ayo ke Pantai Liang!\n\nLihat rutenya di sini:\n' + window.location.href;
    waBtn.href  = 'https://wa.me/?text=' + encodeURIComponent(text);
</script>

</body>
</html>
