<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri – Pantai Liang</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;1,9..144,300;1,9..144,400&family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,600&display=swap" rel="stylesheet">

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
    .nav {
        position: sticky; top: 0; z-index: 100;
        display: flex; justify-content: space-between; align-items: center;
        padding: 0 5rem; height: 68px;
        background: rgba(255,255,255,0.92);
        backdrop-filter: blur(20px);
        box-shadow: 0 1px 0 var(--border), 0 4px 24px rgba(26,155,191,0.07);
    }
    .nav-brand {
        font-family: 'Fraunces', serif; font-size: 1.3rem; font-weight: 400;
        color: var(--ink); text-decoration: none;
    }
    .nav-brand strong { color: var(--ocean); }
    .nav-links { display: flex; gap: 0.3rem; }
    .nav-links a {
        color: var(--ink-soft); text-decoration: none;
        font-size: 0.82rem; font-weight: 500;
        padding: 0.45rem 0.9rem; border-radius: 50px; transition: all 0.2s;
    }
    .nav-links a:hover { background: var(--sky); color: var(--ocean); }
    .nav-links a.active { background: var(--sky); color: var(--ocean); font-weight: 600; }

    @media (max-width: 768px) {
        .nav { padding: 0 1.5rem; }
        .nav-links a { font-size: 0.72rem; padding: 0.35rem 0.55rem; }
    }

    /* ── HERO ── */
    .hero {
        position: relative; height: 420px;
        display: flex; flex-direction: column; justify-content: flex-end;
        overflow: hidden;
    }
    .hero-bg {
        position: absolute; inset: 0;
        background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=1800&q=85') center/cover no-repeat;
    }
    .hero-overlay {
        position: absolute; inset: 0;
        background: linear-gradient(to bottom,rgba(10,30,45,0.2) 0%,rgba(10,30,45,0.55) 60%,rgba(10,30,45,0.85) 100%);
    }
    .hero-ray  { position:absolute;top:0;left:15%;width:2px;height:100%;background:linear-gradient(to bottom,rgba(255,255,255,0.14),transparent);transform:rotate(-6deg);animation:ray 5s ease-in-out infinite; }
    .hero-ray2 { position:absolute;top:0;left:30%;width:1px;height:100%;background:linear-gradient(to bottom,rgba(255,255,255,0.07),transparent);transform:rotate(-3deg);animation:ray 7s ease-in-out infinite reverse; }
    @keyframes ray { 0%,100%{opacity:.4} 50%{opacity:1} }

    .hero-wave { position: absolute; bottom: 0; left: 0; right: 0; }

    .hero-badges {
        position: absolute; top: 1.8rem; left: 5rem;
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
    .badge-pill .dot { width:5px;height:5px;border-radius:50%;background:var(--gold);animation:blink 2s ease infinite; }
    @keyframes blink { 0%,100%{opacity:1} 50%{opacity:.2} }

    .hero-content { position: relative; z-index: 4; padding: 0 5rem 3.5rem; }
    .hero-eyebrow {
        font-size: 0.7rem; letter-spacing: 0.2em; text-transform: uppercase;
        color: rgba(255,255,255,0.7); font-weight: 500; margin-bottom: 0.8rem;
        display: flex; align-items: center; gap: 0.8rem;
    }
    .hero-eyebrow::before { content:'';width:24px;height:1px;background:rgba(255,255,255,0.5); }
    .hero-title {
        font-family: 'Fraunces', serif;
        font-size: clamp(2.4rem,5vw,4.5rem);
        font-weight: 300; line-height: 1.0; color: white; letter-spacing: -0.02em;
    }
    .hero-title em { font-style: italic; color: #a8eae7; }
    .hero-sub { margin-top: 0.7rem; font-size: 0.92rem; color: rgba(255,255,255,0.65); }

    @media (max-width: 768px) {
        .hero { height: 320px; }
        .hero-badges { left: 1.5rem; top: 1.2rem; }
        .hero-content { padding: 0 1.5rem 3rem; }
    }

    /* ── MAIN ── */
    .main { max-width: 1280px; margin: 0 auto; padding: 3rem 5rem 5rem; }
    @media (max-width: 768px) { .main { padding: 2rem 1.5rem 4rem; } }

    /* ── TOOLBAR ── */
    .toolbar {
        display: flex; justify-content: space-between; align-items: flex-end;
        flex-wrap: wrap; gap: 1.4rem; margin-bottom: 1.6rem;
    }
    .section-eyebrow {
        display: flex; align-items: center; gap: 0.7rem;
        font-size: 0.68rem; font-weight: 600; letter-spacing: 0.22em;
        text-transform: uppercase; color: var(--ocean); margin-bottom: 0.4rem;
    }
    .section-eyebrow::before { content:'';width:24px;height:2px;background:var(--teal);border-radius:1px; }
    .section-title {
        font-family: 'Fraunces', serif;
        font-size: clamp(1.5rem,2.5vw,2.2rem); font-weight: 300; color: var(--ink);
    }
    .section-title em { font-style: italic; color: var(--ocean); }
    .photo-badge {
        display: inline-flex; align-items: center; gap: 0.4rem;
        padding: 0.38rem 1rem; margin-top: 0.6rem;
        background: var(--sky); border: 1.5px solid var(--sky-mid);
        border-radius: 50px; font-size: 0.78rem; font-weight: 600; color: var(--ocean);
    }
    .photo-badge b { font-family: 'Fraunces', serif; font-size: 1rem; }

    /* ── FILTER ── */
    .filters { display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 2rem; }
    .f-btn {
        padding: 0.42rem 1.1rem;
        border: 1.5px solid var(--sand-dark); border-radius: 50px;
        font-size: 0.77rem; font-weight: 600; color: var(--text-mid);
        background: none; cursor: pointer;
        font-family: 'Nunito Sans', sans-serif; transition: all 0.22s;
    }
    .f-btn:hover { border-color: var(--ocean); color: var(--ocean); background: var(--sky); }
    .f-btn.on { border-color: var(--ocean); color: white; background: var(--ocean); }

    /* ── MASONRY ── */
    .masonry { columns: 4 220px; column-gap: 1rem; }

    .g-card {
        break-inside: avoid; margin-bottom: 1rem;
        border-radius: 16px; overflow: hidden;
        position: relative; cursor: pointer;
        background: var(--sand);
        box-shadow: 0 4px 16px rgba(26,155,191,0.07);
        transition: transform 0.35s, box-shadow 0.35s;
    }
    .g-card:hover { transform: translateY(-5px); box-shadow: 0 16px 44px rgba(26,155,191,0.16); }

    .g-card img {
        width: 100%; display: block;
        filter: brightness(0.9) saturate(1.05);
        transition: transform 0.5s ease, filter 0.4s;
    }
    .g-card:hover img { transform: scale(1.06); filter: brightness(1) saturate(1.2); }

    /* caption strip */
    .g-caption-strip {
        padding: 0.65rem 0.9rem;
        background: linear-gradient(135deg, var(--sky) 0%, var(--white) 100%);
        border-top: 1px solid var(--sand-dark);
        display: flex; justify-content: space-between; align-items: center;
    }
    .cap-text { font-size: 0.78rem; color: var(--ink-soft); font-weight: 500; }
    .cap-tag {
        font-size: 0.62rem; font-weight: 700; letter-spacing: 0.1em;
        text-transform: uppercase; color: var(--ocean);
        background: var(--sky-mid); padding: 0.15rem 0.55rem; border-radius: 50px;
    }

    /* hover overlay */
    .g-overlay {
        position: absolute; inset: 0;
        background: linear-gradient(to top,rgba(12,60,90,0.75) 0%,rgba(12,60,90,0.1) 55%,transparent 100%);
        opacity: 0; transition: opacity 0.3s;
        display: flex; flex-direction: column; justify-content: flex-end;
        padding: 1rem 1rem 3.4rem;
    }
    .g-card:hover .g-overlay { opacity: 1; }
    .ov-tag { font-size: 0.62rem; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; color: #a8eae7; margin-bottom: 0.25rem; }
    .ov-cap { font-size: 0.82rem; color: white; line-height: 1.3; }

    /* expand icon */
    .g-expand {
        position: absolute; top: 0.7rem; right: 0.7rem;
        width: 32px; height: 32px; border-radius: 50%;
        background: rgba(255,255,255,0.22); backdrop-filter: blur(8px);
        border: 1px solid rgba(255,255,255,0.4);
        display: flex; align-items: center; justify-content: center;
        font-size: 0.85rem; color: white;
        opacity: 0; transition: opacity 0.25s, transform 0.25s;
    }
    .g-card:hover .g-expand { opacity: 1; transform: scale(1.1); }

    .g-card.hidden { display: none; }

    @media (max-width: 900px) { .masonry { columns: 3 180px; } }
    @media (max-width: 600px) { .masonry { columns: 2 140px; } }

    /* ── LOAD MORE ── */
    .load-wrap { text-align: center; margin-top: 3rem; }
    .load-btn {
        display: inline-flex; align-items: center; gap: 0.6rem;
        padding: 0.85rem 2.4rem;
        border: 1.5px solid var(--ocean); border-radius: 50px;
        color: var(--ocean); font-weight: 600; font-size: 0.88rem;
        background: none; cursor: pointer;
        font-family: 'Nunito Sans', sans-serif;
        transition: all 0.28s; position: relative; overflow: hidden;
    }
    .load-btn::before {
        content:''; position:absolute; inset:0;
        background: var(--ocean);
        transform: scaleX(0); transform-origin: left;
        transition: transform 0.3s ease; z-index: 0;
    }
    .load-btn:hover::before { transform: scaleX(1); }
    .load-btn:hover { color: white; }
    .load-btn > * { position: relative; z-index: 1; }
    .load-btn.done { border-color: var(--sand-dark); color: var(--text-muted); pointer-events: none; }
    .load-btn.done::before { display: none; }

    .prog-wrap { max-width: 280px; margin: 1.2rem auto 0; }
    .prog-track { background: var(--sand-dark); border-radius: 50px; height: 4px; overflow: hidden; }
    .prog-fill { height: 100%; background: var(--ocean); border-radius: 50px; transition: width 0.4s ease; }
    .prog-txt { text-align: center; margin-top: 0.5rem; font-size: 0.72rem; color: var(--text-muted); }

    /* ── LIGHTBOX ── */
    .lb {
        position: fixed; inset: 0; z-index: 999;
        background: rgba(10,22,38,0.97);
        display: flex; align-items: center; justify-content: center;
        opacity: 0; pointer-events: none; transition: opacity 0.3s;
    }
    .lb.open { opacity: 1; pointer-events: all; }
    .lb-inner { position: relative; max-width: 88vw; }
    .lb-inner img {
        display: block; max-width: 88vw; max-height: 78vh;
        border-radius: 14px; box-shadow: 0 30px 100px rgba(0,0,0,0.7);
    }
    .lb-meta {
        position: absolute; bottom: -3rem; left: 0; right: 0;
        display: flex; justify-content: space-between; align-items: center;
    }
    .lb-cap { font-size: 0.82rem; color: rgba(255,255,255,0.42); max-width: 70%; }
    .lb-num { font-family: 'Fraunces', serif; font-size: 0.85rem; color: rgba(255,255,255,0.28); }

    .lb-x {
        position: fixed; top: 1.4rem; right: 1.8rem;
        width: 40px; height: 40px; border-radius: 50%;
        background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2);
        color: rgba(255,255,255,0.6); font-size: 1rem; cursor: pointer;
        display: flex; align-items: center; justify-content: center; transition: all 0.2s;
    }
    .lb-x:hover { color: var(--teal); border-color: var(--teal); background: rgba(45,191,184,0.12); }

    .lb-arr {
        position: fixed; top: 50%; transform: translateY(-50%);
        width: 48px; height: 48px; border-radius: 50%;
        background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15);
        color: white; font-size: 1.4rem; cursor: pointer;
        display: flex; align-items: center; justify-content: center; transition: all 0.2s;
    }
    .lb-arr:hover { background: rgba(26,155,191,0.25); border-color: var(--ocean); color: var(--teal); }
    .lb-prev { left: 1.4rem; }
    .lb-next { right: 1.4rem; }

    .lb-strip {
        position: fixed; bottom: 1.4rem; left: 50%; transform: translateX(-50%);
        display: flex; gap: 0.4rem; padding: 0.5rem 0.7rem;
        background: rgba(0,0,0,0.35); border-radius: 14px;
        backdrop-filter: blur(10px); max-width: 90vw; overflow-x: auto;
    }
    .lb-thumb {
        width: 50px; height: 50px; border-radius: 9px; overflow: hidden;
        flex-shrink: 0; cursor: pointer; opacity: 0.4;
        border: 2px solid transparent; transition: all 0.2s;
    }
    .lb-thumb img { width:100%;height:100%;object-fit:cover; }
    .lb-thumb.active { opacity: 1; border-color: var(--teal); }
    .lb-thumb:hover { opacity: 0.75; }

    /* ── BACK BUTTON ── */
    .btn-kembali {
        display: inline-flex; align-items: center; gap: 0.5rem;
        margin: 1.5rem 5rem 3rem;
        padding: 0.65rem 1.4rem;
        background: var(--ocean); color: white; text-decoration: none;
        border-radius: 50px; font-size: 0.82rem; font-weight: 600;
        box-shadow: 0 6px 20px rgba(26,155,191,0.3);
        font-family: 'Nunito Sans', sans-serif; transition: 0.25s;
    }
    .btn-kembali:hover { background: var(--ocean-deep); transform: translateY(-2px); }
    @media (max-width: 768px) { .btn-kembali { margin: 1.5rem 1.5rem 3rem; } }

    @keyframes fadeUp { from{opacity:0;transform:translateY(14px)} to{opacity:1;transform:translateY(0)} }
    </style>
</head>
<body>

<!-- ── NAVBAR ── -->
<nav class="nav">
    <a href="{{ route('profil') }}" class="nav-brand">🏖 Pantai <strong>Liang</strong></a>
    <div class="nav-links">
        <a href="{{ route('profil') }}">Beranda</a>
        <a href="{{ route('galeri') }}">Galeri</a>
    </div>
</nav>

<!-- ── HERO ── -->
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-ray"></div>
    <div class="hero-ray2"></div>
    <div class="hero-wave">
        <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,35 C360,70 1080,0 1440,40 L1440,70 L0,70 Z" fill="#ffffff"/>
        </svg>
    </div>
    <div class="hero-badges">
        <div class="badge-pill"><span class="dot"></span>Koleksi Foto</div>
        <div class="badge-pill">Pantai Liang</div>
    </div>
    <div class="hero-content">
        <div class="hero-eyebrow">Galeri Foto</div>
        <h1 class="hero-title">Setiap Sudut Adalah<br><em>Mahakarya Alam</em></h1>
        <p class="hero-sub">Koleksi foto terbaik Pantai Liang — pasir, laut, dan momen tak terlupakan</p>
    </div>
</section>

<!-- ── MAIN ── -->
<div class="main">

    <!-- Toolbar -->
    <div class="toolbar">
        <div>
            <div class="section-eyebrow">Koleksi Foto</div>
            <h2 class="section-title">Keindahan <em>Pantai Liang</em></h2>
            <div class="photo-badge">📷 <b id="visCount">8</b>&nbsp;foto ditampilkan</div>
        </div>
    </div>

    <!--
        ═══════════════════════════════════════════════════════
        FILTER — disesuaikan dengan data-cat foto kamu:

        data-cat yang dipakai di foto kamu:
          "pantai"      → 🏖 Pantai       (r, c, a, s, t, n)
          "suasana"     → 🌴 Suasana      (e)
          "perahu"      → ⛵ Perahu        (15)
          "taman"       → 🎡 Taman        (z, g)
          "warung"      → 🍽 Warung       (w)
          "rumah-adat"  → 🏠 Rumah Adat   (f)
        ═══════════════════════════════════════════════════════
    -->
    <div class="filters">
        <button class="f-btn on"  data-cat="semua"      onclick="doFilter(this)">🌴 Semua</button>
        <button class="f-btn"     data-cat="pantai"     onclick="doFilter(this)">🏖 Pantai</button>
        <button class="f-btn"     data-cat="suasana"    onclick="doFilter(this)">🌿 Suasana</button>
        <button class="f-btn"     data-cat="perahu"     onclick="doFilter(this)">⛵ Perahu</button>
        <button class="f-btn"     data-cat="taman"      onclick="doFilter(this)">🎡 Taman Bermain</button>
        <button class="f-btn"     data-cat="warung"     onclick="doFilter(this)">🍽 Warung</button>
        <button class="f-btn"     data-cat="rumah-adat" onclick="doFilter(this)">🏠 Rumah Adat</button>
    </div>

    <!-- Masonry Grid -->
    <div class="masonry" id="grid">

        {{-- ══════════════════════════════════════════════════
             BATCH 1 — tampil langsung (8 foto pertama)
             data-cat HARUS huruf kecil & konsisten
        ══════════════════════════════════════════════════ --}}

        <div class="g-card" data-cat="pantai"
             data-src="{{ asset('r.jpeg') }}"
             data-cap="Pantai dengan pasir putih halus yang memanjang">
            <img src="{{ asset('r.jpeg') }}" alt="Pasir Putih">
            <div class="g-overlay">
                <div class="ov-tag">Pantai</div>
                <div class="ov-cap">Pantai dengan pasir putih</div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Pasir Putih Halus</span>
                <span class="cap-tag">Pantai</span>
            </div>
        </div>

        <div class="g-card" data-cat="pantai"
             data-src="{{ asset('c.jpeg') }}"
             data-cap="Pemandangan utama Pantai Liang yang memukau">
            <img src="{{ asset('c.jpeg') }}" alt="Pemandangan">
            <div class="g-overlay">
                <div class="ov-tag">Pantai</div>
                <div class="ov-cap">Pemandangan</div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Pemandangan</span>
                <span class="cap-tag">Pantai</span>
            </div>
        </div>

        <div class="g-card" data-cat="pantai"
             data-src="{{ asset('a.jpeg') }}"
             data-cap="Air laut jernih berwarna toska — ciri khas Pantai Liang">
            <img src="{{ asset('a.jpeg') }}" alt="Air Jernih">
            <div class="g-overlay">
                <div class="ov-tag">Pantai</div>
                <div class="ov-cap">Air laut jernih</div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Air Laut Jernih</span>
                <span class="cap-tag">Pantai</span>
            </div>
        </div>

        <div class="g-card" data-cat="pantai"
             data-src="{{ asset('s.jpeg') }}"
             data-cap="Pemandangan Pantai Liang">
            <img src="{{ asset('s.jpeg') }}" alt="Pantai View">
            <div class="g-overlay">
                <div class="ov-tag">Pantai</div>
                <div class="ov-cap">Panorama pantai</div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Panorama Pantai</span>
                <span class="cap-tag">Pantai</span>
            </div>
        </div>

        <div class="g-card" data-cat="suasana"
             data-src="{{ asset('e.jpeg') }}"
             data-cap="Suasana Pantai Liang — pepohonan di tepi pantai">
            <img src="{{ asset('e.jpeg') }}" alt="Suasana Pantai">
            <div class="g-overlay">
                <div class="ov-tag">Suasana</div>
                <div class="ov-cap">Suasana Pantai Liang</div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Pepohonan di Pantai</span>
                <span class="cap-tag">Suasana</span>
            </div>
        </div>

        <div class="g-card" data-cat="perahu"
             data-src="{{ asset('15.jpeg') }}"
             data-cap="Perahu di lokasi Pantai Liang">
            <img src="{{ asset('15.jpeg') }}" alt="Perahu">
            <div class="g-overlay">
                <div class="ov-tag">Perahu</div>
                <div class="ov-cap">Perahu</div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Perahu</span>
                <span class="cap-tag">Perahu</span>
            </div>
        </div>

        <div class="g-card" data-cat="pantai"
             data-src="{{ asset('t.jpeg') }}"
             data-cap="Gradasi warna laut Pantai Liang">
            <img src="{{ asset('t.jpeg') }}" alt="Gradasi Laut">
            <div class="g-overlay">
                <div class="ov-tag">Pantai</div>
                <div class="ov-cap">Gradasi warna laut</div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Gradasi Warna Laut</span>
                <span class="cap-tag">Pantai</span>
            </div>
        </div>

        <div class="g-card" data-cat="pantai"
             data-src="{{ asset('n.jpeg') }}"
             data-cap="Pemandangan indah Pantai Liang">
            <img src="{{ asset('n.jpeg') }}" alt="Pemandangan">
            <div class="g-overlay">
                <div class="ov-tag">Pantai</div>
                <div class="ov-cap">Pemandangan</div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Pemandangan Pantai</span>
                <span class="cap-tag">Pantai</span>
            </div>
        </div>

        {{-- ══════════════════════════════════════════════════
             BATCH 2 — muncul setelah "Lihat Lebih Banyak"
        ══════════════════════════════════════════════════ --}}

        <div class="g-card hidden" data-cat="taman"
             data-src="{{ asset('z.jpeg') }}"
             data-cap="Taman Bermain Anak-Anak di Pantai Liang">
            <img src="{{ asset('z.jpeg') }}" alt="Taman">
            <div class="g-overlay">
                <div class="ov-tag">Taman</div>
                <div class="ov-cap">Taman bermain</div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Taman</span>
                <span class="cap-tag">Taman</span>
            </div>
        </div>

        <div class="g-card hidden" data-cat="taman"
             data-src="{{ asset('g.jpeg') }}"
             data-cap="Anak-anak bermain di Taman Pantai Liang">
            <img src="{{ asset('g.jpeg') }}" alt="Taman Bermain">
            <div class="g-overlay">
                <div class="ov-tag">Taman</div>
                <div class="ov-cap">Anak-anak bermain</div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Taman Bermain</span>
                <span class="cap-tag">Taman</span>
            </div>
        </div>

        <div class="g-card hidden" data-cat="warung"
             data-src="{{ asset('w.jpeg') }}"
             data-cap="Warung makan sederhana di tepi Pantai Liang">
            <img src="{{ asset('w.jpeg') }}" alt="Warung">
            <div class="g-overlay">
                <div class="ov-tag">Warung</div>
                <div class="ov-cap">Warung makan</div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Warung Makan</span>
                <span class="cap-tag">Warung</span>
            </div>
        </div>

        <div class="g-card hidden" data-cat="rumah-adat"
             data-src="{{ asset('f.jpeg') }}"
             data-cap="Rumah adat khas Maluku di kawasan Pantai Liang">
            <img src="{{ asset('f.jpeg') }}" alt="Rumah Adat">
            <div class="g-overlay">
                <div class="ov-tag">Rumah Adat</div>
                <div class="ov-cap">Rumah adat </div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Rumah Adat</span>
                <span class="cap-tag">Adat</span>
            </div>
        </div>
        <div class="g-card hidden" data-cat="Pantai"
             data-src="{{ asset('b.jpg') }}"
             data-cap="Pantai Liang">
            <img src="{{ asset('b.jpg') }}" alt="Pantait">
            <div class="g-overlay">
                <div class="ov-tag">Pantai</div>
                <div class="ov-cap">Pantai </div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Pantai</span>
                <span class="cap-tag">Pantai</span>
            </div>
        </div>

        <div class="g-card hidden" data-cat="Suasana"
             data-src="{{ asset('liang3.jpeg') }}"
             data-cap="kawasan Pantai Liang">
            <img src="{{ asset('liang3.jpeg') }}" alt="Pantai">
            <div class="g-overlay">
                <div class="ov-tag">Pantai</div>
                <div class="ov-cap">Suasana  </div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Pantai</span>
                <span class="cap-tag">Suasana </span>
            </div>
        </div>

        <div class="g-card hidden" data-cat="Pantai"
             data-src="{{ asset('liang2.jpeg') }}"
             data-cap="kawasan Pantai Liang">
            <img src="{{ asset('liang2.jpeg') }}" alt="Suasana ">
            <div class="g-overlay">
                <div class="ov-tag">Pantai</div>
                <div class="ov-cap">Suasana </div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Suasana </span>
                <span class="cap-tag">Suasana </span>
            </div>
        </div>

        <div class="g-card hidden" data-cat="Suasana "
             data-src="{{ asset('16.jpeg') }}"
             data-cap="kawasan Pantai Liang">
            <img src="{{ asset('16.jpeg') }}" alt="Suasana ">
            <div class="g-overlay">
                <div class="ov-tag">Suasana Pantai Liang</div>
                <div class="ov-cap">Suasana </div>
            </div>
            <div class="g-expand">⤢</div>
            <div class="g-caption-strip">
                <span class="cap-text">Suasana</span>
                <span class="cap-tag">Suasana</span>
            </div>
        </div>

    </div><!-- /masonry -->

    <!-- Load More -->
    <div class="load-wrap">
        <button class="load-btn" id="loadBtn" onclick="loadMore()">
            <span>📷</span>
            <span>Lihat Lebih Banyak Foto</span>
        </button>
        <div class="prog-wrap">
            <div class="prog-track">
                <div class="prog-fill" id="progFill" style="width:67%"></div>
            </div>
            <div class="prog-txt" id="progTxt">8 dari 12 foto ditampilkan</div>
        </div>
    </div>

</div><!-- /main -->

<!-- Kembali -->
<a href="{{ route('profil') }}" class="btn-kembali">← Kembali ke Profil</a>

<!-- ── LIGHTBOX ── -->
<div class="lb" id="lb" onclick="handleBg(event)">
    <button class="lb-x" onclick="closeLb()">✕</button>
    <button class="lb-arr lb-prev" onclick="moveLb(-1);event.stopPropagation()">‹</button>
    <button class="lb-arr lb-next" onclick="moveLb(1);event.stopPropagation()">›</button>
    <div class="lb-inner" onclick="event.stopPropagation()">
        <img src="" alt="" id="lb-img">
        <div class="lb-meta">
            <div class="lb-cap" id="lb-cap"></div>
            <div class="lb-num" id="lb-num"></div>
        </div>
    </div>
    <div class="lb-strip" id="lb-strip" onclick="event.stopPropagation()"></div>
</div>

<script>
/* ══════════════════════════════════════════════════════
   PENTING: data-cat di semua kartu HARUS huruf kecil
   dan SAMA PERSIS dengan nilai di tombol filter.

   Daftar kategori yang dipakai:
     "pantai"      → foto pantai & laut
     "suasana"     → suasana alam, pepohonan
     "perahu"      → perahu nelayan
     "taman"       → taman bermain
     "warung"      → warung makan
     "rumah-adat"  → rumah adat

   Tombol filter memakai atribut data-cat yang
   langsung dibaca JS — tidak perlu parsing teks.
══════════════════════════════════════════════════════ */

const BATCH   = 8;
let   shown   = BATCH;
let   visible = [];
let   lbIdx   = 0;

const all = Array.from(document.querySelectorAll('.g-card'));

/* ── FILTER ── */
function doFilter(btn) {
    document.querySelectorAll('.f-btn').forEach(b => b.classList.remove('on'));
    btn.classList.add('on');
    shown = BATCH;

    const cat     = btn.dataset.cat;                                          // ambil dari data-cat tombol
    const matched = all.filter(c => cat === 'semua' || c.dataset.cat === cat);

    all.forEach(c => c.classList.add('hidden'));
    matched.slice(0, shown).forEach(c => c.classList.remove('hidden'));

    rebuild(); sync();
}

/* ── LOAD MORE ── */
function loadMore() {
    const cat     = document.querySelector('.f-btn.on').dataset.cat;
    const matched = all.filter(c => cat === 'semua' || c.dataset.cat === cat);
    const toShow  = matched.slice(shown, shown + BATCH);

    toShow.forEach(c => {
        c.classList.remove('hidden');
        c.style.animation = 'none';
        c.offsetHeight;
        c.style.animation = 'fadeUp 0.4s ease forwards';
    });
    shown = Math.min(shown + BATCH, matched.length);
    rebuild(); sync();
}

/* ── SYNC UI ── */
function sync() {
    const cat   = document.querySelector('.f-btn.on').dataset.cat;
    const total = all.filter(c => cat === 'semua' || c.dataset.cat === cat).length;
    const pct   = Math.min((shown / total) * 100, 100);

    document.getElementById('progFill').style.width = pct + '%';
    document.getElementById('progTxt').textContent  = Math.min(shown, total) + ' dari ' + total + ' foto ditampilkan';
    document.getElementById('visCount').textContent = visible.length;

    const btn = document.getElementById('loadBtn');
    if (shown >= total) {
        btn.innerHTML = '<span>✅</span><span>Semua Foto Sudah Ditampilkan</span>';
        btn.classList.add('done');
    } else {
        btn.innerHTML = '<span>📷</span><span>Lihat Lebih Banyak Foto</span>';
        btn.classList.remove('done');
    }
}

/* ── REBUILD VISIBLE LIST ── */
function rebuild() {
    visible = all.filter(c => !c.classList.contains('hidden'));
    visible.forEach((c, i) => { c.onclick = () => openLb(i); });
    buildThumbs();
}

/* ── LIGHTBOX ── */
function openLb(i) {
    lbIdx = i; renderLb();
    document.getElementById('lb').classList.add('open');
    document.body.style.overflow = 'hidden';
}
function closeLb() {
    document.getElementById('lb').classList.remove('open');
    document.body.style.overflow = '';
}
function moveLb(d) {
    lbIdx = (lbIdx + d + visible.length) % visible.length; renderLb();
}
function renderLb() {
    const c = visible[lbIdx];
    document.getElementById('lb-img').src         = c.dataset.src;
    document.getElementById('lb-cap').textContent = c.dataset.cap;
    document.getElementById('lb-num').textContent = (lbIdx + 1) + ' / ' + visible.length;
    document.querySelectorAll('.lb-thumb').forEach((t, i) => t.classList.toggle('active', i === lbIdx));
    const at = document.querySelector('.lb-thumb.active');
    if (at) at.scrollIntoView({ behavior:'smooth', block:'nearest', inline:'center' });
}
function buildThumbs() {
    const strip = document.getElementById('lb-strip');
    strip.innerHTML = '';
    visible.forEach((c, i) => {
        const th = document.createElement('div');
        th.className = 'lb-thumb' + (i === lbIdx ? ' active' : '');
        th.innerHTML = `<img src="${c.querySelector('img').src}" alt="">`;
        th.addEventListener('click', e => { e.stopPropagation(); lbIdx = i; renderLb(); });
        strip.appendChild(th);
    });
}
function handleBg(e) { if (e.target === document.getElementById('lb')) closeLb(); }

document.addEventListener('keydown', e => {
    if (!document.getElementById('lb').classList.contains('open')) return;
    if (e.key === 'ArrowRight') moveLb(1);
    if (e.key === 'ArrowLeft')  moveLb(-1);
    if (e.key === 'Escape')     closeLb();
});

/* ── INIT ── */
all.slice(BATCH).forEach(c => c.classList.add('hidden'));
rebuild(); sync();
</script>

</body>
</html>
