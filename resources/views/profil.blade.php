<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Destinasi – PANTAI LIANG (HUNIMUA)</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,600;1,9..144,300;1,9..144,400&family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,600&family=Italiana&display=swap" rel="stylesheet">

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
            --gold-dark:  #d4a500;
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

        .section-eyebrow {
            font-size: 0.68rem; letter-spacing: 0.22em; text-transform: uppercase;
            color: var(--ocean); font-weight: 600;
            display: flex; align-items: center; gap: 0.7rem;
            margin-bottom: 1rem;
        }
        .section-eyebrow::before {
            content: ''; width: 28px; height: 2px;
            background: var(--teal); border-radius: 1px; flex-shrink: 0;
        }

        .section-title {
            font-family: 'Fraunces', serif;
            font-size: clamp(2rem, 3.4vw, 3rem);
            font-weight: 300; line-height: 1.18;
            color: var(--ink); margin-bottom: 1.4rem;
        }
        .section-title em { font-style: italic; color: var(--ocean); font-weight: 300; }

        .wave-divider { display: block; width: 100%; line-height: 0; }

        .reveal {
            opacity: 0; transform: translateY(24px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .reveal.visible { opacity: 1; transform: none; }

        /* ══════════════════════════════
           NAVBAR
        ══════════════════════════════ */
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
            font-family: 'Fraunces', serif; font-size: 1.3rem; font-weight: 400;
            color: var(--ink); text-decoration: none;
            display: flex; align-items: center; gap: 0.5rem;
        }
        .nav-logo strong { color: var(--ocean); font-weight: 600; }
        .nav-menu { display: flex; list-style: none; gap: 0.3rem; margin: 0; padding: 0; align-items: center; }
        .nav-link {
            color: var(--ink-soft); text-decoration: none;
            font-size: 0.82rem; font-weight: 500;
            padding: 0.45rem 0.9rem; border-radius: 50px;
            transition: all 0.2s; display: inline-block;
        }
        .nav-link:hover { background: var(--sky); color: var(--ocean); }
        .nav-link.special { background: none; color: var(--ink-soft); font-weight: 500; }
        .nav-link.special:hover { background: var(--sky); color: var(--ocean); }
        @media (max-width: 768px) {
            .navbar { padding: 0 1.5rem; }
            .nav-menu { gap: 0.2rem; }
            .nav-link { font-size: 0.75rem; padding: 0.35rem 0.6rem; }
        }

        /* ══════════════════════════════
           HERO
        ══════════════════════════════ */
        .page-hero {
            position: relative; height: 100vh; min-height: 600px;
            display: flex; flex-direction: column; justify-content: center; overflow: hidden;
        }
        .page-hero-img {
            position: absolute; inset: 0;
            background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=1800&q=85') center/cover no-repeat;
        }
        .page-hero-overlay {
            position: absolute; inset: 0;
            background: linear-gradient(to bottom, rgba(10,30,45,0.25) 0%, rgba(10,30,45,0.1) 35%, rgba(10,30,45,0.55) 70%, rgba(10,30,45,0.78) 100%);
        }
        .hero-ray   { position:absolute; top:0; left:15%; width:2px; height:100%; background:linear-gradient(to bottom,rgba(255,255,255,0.18),transparent); transform:rotate(-5deg); animation:ray-pulse 5s ease-in-out infinite; }
        .hero-ray-2 { position:absolute; top:0; left:28%; width:1px; height:100%; background:linear-gradient(to bottom,rgba(255,255,255,0.09),transparent); transform:rotate(-3deg); animation:ray-pulse 7s ease-in-out infinite reverse; }
        @keyframes ray-pulse { 0%,100%{opacity:.5} 50%{opacity:1} }

        .page-hero-wave { position:absolute; bottom:0; left:0; right:0; }

        .hero-badges { position:absolute; top:90px; left:5rem; display:flex; gap:0.6rem; z-index:4; }
        .hero-badge-pill {
            display:inline-flex; align-items:center; gap:0.4rem;
            padding:0.35rem 0.9rem;
            background:rgba(255,255,255,0.18); backdrop-filter:blur(12px);
            border:1px solid rgba(255,255,255,0.35); border-radius:50px;
            font-size:0.7rem; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:white;
        }
        .hero-badge-pill .dot { width:5px; height:5px; border-radius:50%; background:var(--gold); animation:blink 2s ease infinite; }
        @keyframes blink { 0%,100%{opacity:1} 50%{opacity:.2} }

        .page-hero-content { position:relative; z-index:4; padding:0 5rem; max-width:900px; }
        .hero-eyebrow { font-size:0.72rem; letter-spacing:0.2em; text-transform:uppercase; color:rgba(255,255,255,0.75); font-weight:500; margin-bottom:1.2rem; display:flex; align-items:center; gap:0.8rem; }
        .hero-eyebrow::before { content:''; width:24px; height:1px; background:rgba(255,255,255,0.5); }
        .page-hero-title { font-family:'Fraunces',serif; font-size:clamp(3rem,7vw,6.5rem); font-weight:300; line-height:1.0; color:white; letter-spacing:-0.02em; }
        .page-hero-title em { font-style:italic; color:#a8eae7; }
        .hero-sub { margin-top:1rem; font-size:1rem; color:rgba(255,255,255,0.7); font-weight:300; }

        .hero-stats { position:absolute; bottom:80px; left:5rem; z-index:4; display:flex; gap:1rem; }
        .hero-stat-card { background:rgba(255,255,255,0.13); backdrop-filter:blur(16px); border:1px solid rgba(255,255,255,0.25); border-radius:14px; padding:0.9rem 1.3rem; min-width:110px; transition:background 0.3s; }
        .hero-stat-card:hover { background:rgba(255,255,255,0.22); }
        .hero-stat-num { font-family:'Fraunces',serif; font-size:1.6rem; font-weight:300; color:white; line-height:1; }
        .hero-stat-num span { font-size:0.85rem; }
        .hero-stat-label { font-size:0.65rem; color:rgba(255,255,255,0.6); letter-spacing:0.08em; text-transform:uppercase; margin-top:0.25rem; }

        @media (max-width:768px) {
            .hero-badges,.hero-stats { left:1.5rem; }
            .page-hero-content { padding:0 1.5rem; }
            .hero-stats { flex-wrap:wrap; gap:0.5rem; bottom:70px; }
        }

        /* cuaca */
        .cuaca-floating { position:absolute; top:90px; right:5rem; width:210px; padding:1.2rem 1.3rem; border-radius:18px; background:rgba(255,255,255,0.18); backdrop-filter:blur(18px); border:1px solid rgba(255,255,255,0.3); box-shadow:0 12px 40px rgba(0,0,0,0.15); z-index:10; transition:0.3s; }
        .cuaca-floating:hover { transform:translateY(-4px); }
        .cuaca-mini-header { font-size:0.68rem; letter-spacing:0.12em; text-transform:uppercase; color:rgba(255,255,255,0.8); margin-bottom:0.6rem; font-weight:600; }
        .cuaca-mini-main { display:flex; justify-content:space-between; align-items:center; }
        .cuaca-mini-suhu { font-family:'Fraunces',serif; font-size:2.2rem; font-weight:300; color:white; line-height:1; }
        .cuaca-mini-icon { font-size:2rem; }
        .cuaca-mini-status { font-size:0.78rem; color:rgba(255,255,255,0.75); margin:0.4rem 0; }
        .cuaca-mini-info { display:flex; justify-content:space-between; font-size:0.68rem; color:rgba(255,255,255,0.6); }
        @media (max-width:768px) { .cuaca-floating { display:none; } }

        /* ══════════════════════════════
           ABOUT
        ══════════════════════════════ */
        .section-about { background:var(--white); padding:6rem 5rem; position:relative; overflow:hidden; }
        .section-about::before { content:'LIANG'; position:absolute; bottom:-3rem; right:-2rem; font-family:'Italiana',serif; font-size:20rem; color:var(--sky); pointer-events:none; white-space:nowrap; line-height:1; z-index:0; }
        .about-grid { display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center; position:relative; z-index:1; }
        .about-text p { font-size:0.97rem; line-height:1.9; color:var(--ink-soft); margin-bottom:1rem; }
        .about-text p strong { color:var(--ocean-dark); font-weight:600; }
        .tag-row { display:flex; flex-wrap:wrap; gap:0.5rem; margin-top:1.6rem; }
        .tag { padding:0.3rem 0.9rem; background:var(--sky); border-radius:50px; font-size:0.73rem; font-weight:600; color:var(--ocean); letter-spacing:0.05em; border:1px solid var(--sky-mid); }

        /* ── Sejarah Singkat ── */
        .sejarah-box {
            margin-top: 1.8rem;
            background: linear-gradient(135deg, var(--sky) 0%, var(--teal-light) 100%);
            border: 1px solid rgba(26,155,191,0.18);
            border-radius: 18px;
            padding: 1.4rem 1.6rem 1.6rem;
            position: relative; overflow: hidden;
        }
        .sejarah-box::before {
            content: '';
            position: absolute; top: 0; left: 0; width: 4px; height: 100%;
            background: linear-gradient(to bottom, var(--teal), var(--ocean));
            border-radius: 18px 0 0 18px;
        }
        .sejarah-label {
            font-size: 0.68rem; font-weight: 700; letter-spacing: 0.15em;
            text-transform: uppercase; color: var(--ocean);
            margin-bottom: 0.75rem;
        }
        .sejarah-intro {
            font-size: 0.88rem !important;
            line-height: 1.8 !important;
            color: var(--ink-soft) !important;
            margin-bottom: 1.2rem !important;
        }

        /* Timeline tiga item */
        .sejarah-timeline {
            display: flex; flex-direction: column; gap: 0;
        }
        .st-item {
            display: flex; gap: 1rem; align-items: flex-start;
            padding: 0.65rem 0;
            border-bottom: 1px dashed rgba(26,155,191,0.2);
            position: relative;
        }
        .st-item:last-child { border-bottom: none; padding-bottom: 0; }
        .st-year {
            font-family: 'Fraunces', serif;
            font-size: 0.9rem; font-weight: 400;
            color: var(--ocean-dark);
            min-width: 46px; padding-top: 1px;
            flex-shrink: 0;
        }
        .st-desc {
            font-size: 0.83rem; line-height: 1.7;
            color: var(--ink-soft);
        }
        .st-desc strong { color: var(--ocean-dark); }
        .about-visual { position:relative; height:500px; }
        .acard { position:absolute; border-radius:18px; overflow:hidden; box-shadow:0 20px 60px rgba(26,155,191,0.18); }
        .acard img { width:100%; height:100%; object-fit:cover; display:block; }
        .acard-main { width:320px; height:420px; top:0; right:0; }
        .acard-secondary { width:200px; height:255px; bottom:0; left:10px; border:4px solid white; box-shadow:0 12px 40px rgba(0,0,0,0.15); }
        .acard-tag { position:absolute; bottom:-14px; right:16px; background:var(--ocean); color:white; padding:0.5rem 1.3rem; border-radius:50px; font-size:0.74rem; font-weight:600; white-space:nowrap; box-shadow:0 6px 20px rgba(26,155,191,0.4); }
        .acard-ribbon { position:absolute; top:1.2rem; left:-0.8rem; background:var(--gold); color:var(--ink); padding:0.4rem 1.2rem 0.4rem 1.8rem; font-size:0.68rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; clip-path:polygon(8% 0,100% 0,100% 100%,8% 100%,0 50%); box-shadow:4px 0 12px rgba(245,200,66,0.4); }

        /* ══════════════════════════════
           KEUNIKAN
        ══════════════════════════════ */
        .section-keunikan { background:var(--sand); padding:6rem 5rem; position:relative; overflow:hidden; }
        .keunikan-header { max-width:580px; margin-bottom:3.5rem; }
        .keunikan-header p { font-size:0.95rem; color:var(--text-mid); line-height:1.8; }
        .keunikan-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:1.5rem; }
        .k-card { background:var(--white); border:1px solid var(--sand-dark); border-radius:20px; padding:2rem 1.8rem; position:relative; overflow:hidden; transition:transform 0.3s,box-shadow 0.3s,border-color 0.3s; }
        .k-card::before { content:''; position:absolute; top:0; left:1.8rem; right:1.8rem; height:3px; background:linear-gradient(90deg,var(--teal),var(--ocean)); border-radius:0 0 3px 3px; opacity:0; transition:opacity 0.3s; }
        .k-card:hover { transform:translateY(-6px); box-shadow:0 16px 48px rgba(26,155,191,0.13); border-color:rgba(26,155,191,0.3); }
        .k-card:hover::before { opacity:1; }
        .k-icon { font-size:2.2rem; margin-bottom:1rem; display:flex; align-items:center; justify-content:center; width:56px; height:56px; background:var(--sky); border-radius:14px; }
        .k-title { font-family:'Fraunces',serif; font-size:1.08rem; font-weight:400; margin-bottom:0.6rem; color:var(--ink); }
        .k-desc { font-size:0.86rem; line-height:1.78; color:var(--text-mid); }

        /* ══════════════════════════════
           GALERI
        ══════════════════════════════ */
        .section-galeri { background:var(--white); padding:6rem 5rem; }
        .galeri-header { margin-bottom:2.5rem; }
        .galeri-header-row { display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:1.5rem; }
        .galeri-filter { display:flex; gap:0.5rem; flex-wrap:wrap; }
        .filter-btn {
            padding:0.4rem 1.1rem; border:1.5px solid var(--sand-dark); border-radius:50px;
            font-size:0.77rem; font-weight:600; letter-spacing:0.04em;
            color:var(--text-mid); background:var(--white); cursor:pointer;
            font-family:'Nunito Sans',sans-serif; transition:all 0.22s;
        }
        .filter-btn:hover { border-color:var(--ocean); color:var(--ocean); background:var(--sky); }
        .filter-btn.active { border-color:var(--ocean); color:var(--ocean); background:var(--sky); }

        .galeri-grid {
            display:grid;
            grid-template-columns:repeat(12,1fr);
            grid-template-rows:210px 210px 210px;
            grid-auto-rows:210px;
            gap:0.8rem;
        }
        .g-item { overflow:hidden; border-radius:14px; position:relative; cursor:pointer; }
        .g-item img { width:100%; height:100%; object-fit:cover; display:block; transition:transform 0.5s ease,filter 0.4s ease; filter:brightness(0.88); }
        .g-item:hover img { transform:scale(1.06); filter:brightness(1) saturate(1.15); }
        .g-overlay { position:absolute; inset:0; background:linear-gradient(to top,rgba(12,60,90,0.75) 0%,transparent 55%); opacity:0; transition:opacity 0.3s; display:flex; flex-direction:column; justify-content:flex-end; padding:1rem 1.2rem; }
        .g-item:hover .g-overlay { opacity:1; }
        .g-tag { font-size:0.64rem; letter-spacing:0.14em; text-transform:uppercase; color:#a8eae7; margin-bottom:0.2rem; font-weight:700; }
        .g-caption { font-size:0.82rem; color:white; line-height:1.3; }
        .g-item.filter-hidden { display:none; }
        .g1 { grid-column:1/6;   grid-row:1/3; }
        .g2 { grid-column:6/9;   grid-row:1/2; }
        .g3 { grid-column:9/13;  grid-row:1/2; }
        .g4 { grid-column:6/10;  grid-row:2/3; }
        .g5 { grid-column:10/13; grid-row:2/4; }
        .g6 { grid-column:1/5;   grid-row:3/4; }
        .g7 { grid-column:5/10;  grid-row:3/4; }

        .galeri-footer { text-align:center; margin-top:2.5rem; }
        .btn-outline {
            padding:0.75rem 2rem; border:1.5px solid var(--ocean); border-radius:50px;
            color:var(--ocean); font-weight:600; font-size:0.85rem;
            background:none; cursor:pointer; text-decoration:none;
            display:inline-block; transition:all 0.25s; font-family:'Nunito Sans',sans-serif;
        }
        .btn-outline:hover { background:var(--ocean); color:white; }

        /* lightbox */
        .lightbox { position:fixed; inset:0; z-index:999; background:rgba(10,25,40,0.95); display:flex; align-items:center; justify-content:center; opacity:0; pointer-events:none; transition:opacity 0.3s; }
        .lightbox.open { opacity:1; pointer-events:all; }
        .lb-inner { position:relative; max-width:90vw; }
        .lb-inner img { display:block; max-width:90vw; max-height:85vh; border-radius:12px; }
        .lb-caption { position:absolute; bottom:-2.2rem; left:0; right:0; text-align:center; font-size:0.82rem; color:rgba(255,255,255,0.4); }
        .lb-close { position:fixed; top:1.5rem; right:2rem; font-size:1.4rem; cursor:pointer; color:rgba(255,255,255,0.5); background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.2); width:38px; height:38px; border-radius:50%; display:flex; align-items:center; justify-content:center; transition:all 0.2s; }
        .lb-close:hover { color:var(--teal); border-color:var(--teal); background:rgba(45,191,184,0.1); }
        .lb-nav { position:fixed; top:50%; transform:translateY(-50%); background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.2); color:white; border-radius:50%; width:44px; height:44px; display:flex; align-items:center; justify-content:center; cursor:pointer; font-size:1.3rem; transition:all 0.2s; }
        .lb-nav:hover { background:rgba(45,191,184,0.25); border-color:var(--teal); color:var(--teal); }
        .lb-prev { left:1.5rem; }
        .lb-next { right:1.5rem; }

        /* ═══════════════════════════════════════════════════
           SECTION TIKET & MUSIM — palet terang (sand/sky)
           selaras dengan section About & Keunikan
        ═══════════════════════════════════════════════════ */
        .section-tiket {
            background: var(--sand);          /* sama dengan section Keunikan */
            padding: 6rem 5rem;
            position: relative;
            overflow: hidden;
        }

        /* Dekorasi lingkaran latar — warna ocean transparan */
        .tiket-bg-circle {
            position: absolute; border-radius: 50%; pointer-events: none;
            background: rgba(26,155,191,0.05);
        }
        .tiket-bg-circle.c1 { width: 500px; height: 500px; top: -200px; right: -100px; }
        .tiket-bg-circle.c2 { width: 300px; height: 300px; bottom: -100px; left: 5%; }
        .tiket-bg-circle.c3 { width: 180px; height: 180px; top: 40%; left: 45%; }

        /* Grid 2 kolom */
        .tiket-layout {
            position: relative; z-index: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
            align-items: start;
        }

        /* ─── KARTU TIKET ─────────────────── */
        .tiket-card {
            background: var(--white);
            border: 1px solid var(--sand-dark);
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 12px 40px rgba(26,155,191,0.10);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .tiket-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 56px rgba(26,155,191,0.16);
        }

        /* Header kartu tiket — gradasi teal→ocean (sama seperti di kode asli) */
        .tiket-card-head {
            background: linear-gradient(135deg, var(--teal) 0%, var(--ocean) 100%);
            padding: 2rem 2.2rem 1.8rem;
            position: relative;
        }
        .tiket-card-head::after {
            content: '';
            position: absolute; bottom: -1px; left: 0; right: 0;
            height: 28px;
            background: var(--white);
            clip-path: ellipse(55% 100% at 50% 100%);
        }
        .tiket-head-label {
            font-size: 0.65rem; letter-spacing: 0.2em; text-transform: uppercase;
            color: rgba(255,255,255,0.75); font-weight: 600; margin-bottom: 0.5rem;
        }
        .tiket-head-title {
            font-family: 'Fraunces', serif;
            font-size: 1.6rem; font-weight: 300; color: white; line-height: 1.1;
        }
        .tiket-head-sub {
            font-size: 0.78rem; color: rgba(255,255,255,0.65); margin-top: 0.4rem;
        }

        /* Perforasi */
        .tiket-perf {
            display: flex; align-items: center; position: relative;
        }
        .tiket-perf::before,
        .tiket-perf::after {
            content: '';
            width: 22px; height: 22px; border-radius: 50%;
            background: var(--sand);          /* warna bg section agar menyatu */
            flex-shrink: 0; margin: 0 -11px;
        }
        .tiket-perf-dots {
            flex: 1;
            border-top: 2px dashed var(--sand-dark);
        }

        /* Body tiket */
        .tiket-card-body { padding: 1.8rem 2.2rem 2rem; }

        /* Setiap baris harga */
        .tiket-row {
            display: flex; justify-content: space-between; align-items: center;
            padding: 0.85rem 0;
            border-bottom: 1px solid var(--sand-dark);
            transition: background 0.2s, padding 0.2s, margin 0.2s;
        }
        .tiket-row:last-child { border-bottom: none; }
        .tiket-row:hover {
            background: var(--sky);
            margin: 0 -0.5rem;
            padding-left: 0.5rem; padding-right: 0.5rem;
            border-radius: 10px;
        }
        .tiket-row-left {
            display: flex; align-items: center; gap: 0.75rem;
        }
        .tiket-row-icon {
            width: 38px; height: 38px; border-radius: 10px;
            background: var(--sky);
            display: flex; align-items: center; justify-content: center;
            font-size: 1.1rem; flex-shrink: 0;
        }
        .tiket-row-label {
            font-size: 0.88rem; color: var(--ink-soft); font-weight: 500;
        }
        .tiket-row-price {
            font-family: 'Fraunces', serif;
            font-size: 1.05rem; font-weight: 400;
            color: var(--ocean-dark);
            letter-spacing: -0.01em;
        }

        /* Footer tiket */
        .tiket-card-foot {
            display: flex; align-items: center; gap: 0.6rem;
            padding: 1rem 2.2rem 1.5rem;
            font-size: 0.74rem; color: var(--text-muted);
            border-top: 1px solid var(--sand-dark);
        }
        .tiket-card-foot-dot {
            width: 6px; height: 6px; border-radius: 50%;
            background: var(--teal); flex-shrink: 0;
        }

        /* ─── KOLOM MUSIM ────────────────── */
        .musim-col {
            display: flex; flex-direction: column; gap: 1.4rem;
        }

        /* Heading kolom kanan — menggunakan section-eyebrow & section-title asli */
        .musim-heading { margin-bottom: 0.5rem; }
        .musim-heading p {
            font-size: 0.9rem; color: var(--text-mid); line-height: 1.75;
        }

        /* Kartu musim terbaik */
        .musim-best-card {
            background: var(--white);
            border: 1px solid rgba(26,155,191,0.2);
            border-radius: 20px;
            padding: 1.6rem 1.8rem;
            position: relative; overflow: hidden;
            box-shadow: 0 8px 28px rgba(26,155,191,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .musim-best-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 40px rgba(26,155,191,0.13);
        }
        .musim-best-card::before {
            content: '☀️';
            position: absolute; right: 1.2rem; top: 1rem;
            font-size: 3.5rem; opacity: 0.12; pointer-events: none;
        }
        .musim-best-badge {
            display: inline-flex; align-items: center; gap: 0.4rem;
            background: rgba(245,200,66,0.15);
            border: 1px solid rgba(245,200,66,0.4);
            border-radius: 50px; padding: 0.25rem 0.8rem;
            font-size: 0.65rem; font-weight: 700;
            color: var(--gold-dark); letter-spacing: 0.1em;
            text-transform: uppercase; margin-bottom: 0.9rem;
        }
        .musim-best-card h3 {
            font-family: 'Fraunces', serif;
            font-size: 1.05rem; font-weight: 400;
            color: var(--ink); margin-bottom: 0.5rem;
        }
        .musim-best-card p {
            font-size: 0.84rem; line-height: 1.75; color: var(--text-mid);
        }

        /* Bulan-bulan terbaik */
        .musim-months {
            display: flex; flex-wrap: wrap; gap: 0.5rem; margin-top: 1.1rem;
        }
        .musim-month-pill {
            display: flex; flex-direction: column; align-items: center;
            padding: 0.5rem 0.9rem;
            background: var(--sky);
            border: 1px solid var(--sky-mid);
            border-radius: 12px;
            transition: all 0.22s; cursor: default;
        }
        .musim-month-pill:hover {
            background: var(--teal-light);
            border-color: rgba(45,191,184,0.5);
            transform: translateY(-2px);
        }
        .musim-month-pill .m-name {
            font-size: 0.78rem; font-weight: 700; color: var(--ocean-dark);
        }
        .musim-month-pill .m-icon { font-size: 0.9rem; }

        /* Kartu kondisi cuaca */
        .musim-cond-grid {
            display: grid; grid-template-columns: 1fr 1fr; gap: 0.8rem;
        }
        .musim-cond-card {
            background: var(--white);
            border: 1px solid var(--sand-dark);
            border-radius: 16px; padding: 1.1rem 1.2rem;
            transition: border-color 0.25s, box-shadow 0.25s, transform 0.25s;
        }
        .musim-cond-card:hover {
            border-color: rgba(26,155,191,0.3);
            box-shadow: 0 8px 24px rgba(26,155,191,0.08);
            transform: translateY(-2px);
        }
        .musim-cond-icon { font-size: 1.5rem; margin-bottom: 0.5rem; }
        .musim-cond-label {
            font-size: 0.7rem; letter-spacing: 0.07em; text-transform: uppercase;
            color: var(--text-muted); font-weight: 600; margin-bottom: 0.2rem;
        }
        .musim-cond-value {
            font-family: 'Fraunces', serif;
            font-size: 1rem; font-weight: 300; color: var(--ink);
        }

        /* ─── RESPONSIVE ─────────────────── */
        @media (max-width: 1024px) {
            .page-hero,.section-about,.section-keunikan,.section-galeri,.section-tiket { padding-left:3rem; padding-right:3rem; }
            .keunikan-grid { grid-template-columns:repeat(2,1fr); }
            .galeri-grid { grid-template-columns:repeat(2,1fr); grid-template-rows:none; grid-auto-rows:220px; }
            .g1,.g2,.g3,.g4,.g5,.g6,.g7 { grid-column:auto; grid-row:auto; }
            .g1 { grid-column:span 2; }
        }
        @media (max-width: 768px) {
            .page-hero { min-height:100svh; }
            .hero-badges,.hero-stats { left:1.5rem; }
            .page-hero-content { padding:0 1.5rem; }
            .about-grid,.keunikan-grid { grid-template-columns:1fr; }
            .about-visual { height:300px; }
            .section-about,.section-keunikan,.section-galeri,.section-tiket { padding:4rem 1.5rem; }
            .galeri-header-row { flex-direction:column; align-items:flex-start; gap:1rem; }
            .galeri-grid { grid-template-columns:1fr; grid-template-rows:none; grid-auto-rows:200px; }
            .g1,.g2,.g3,.g4,.g5,.g6,.g7 { grid-column:auto; grid-row:auto; }
            .tiket-layout { grid-template-columns:1fr; }
            .musim-cond-grid { grid-template-columns:1fr 1fr; }
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-container">
        <a href="#" class="nav-logo">🏖 Pantai <strong>Liang</strong></a>
        <ul class="nav-menu">
            <li><a href="#tentang"      class="nav-link">Beranda</a></li>
            <li><a href="#keunikan"     class="nav-link">Keunikan</a></li>
            <li><a href="/panduan_rute" class="nav-link">🗺 Panduan Rute</a></li>
            <li><a href="/fasilitas"    class="nav-link">Fasilitas</a></li>
            <li><a href="{{ route('galeri') }}" class="nav-link special">Galeri</a></li>
        </ul>
    </div>
</nav>

<!-- HERO -->
<section class="page-hero">
    <div class="page-hero-img"></div>
    <div class="page-hero-overlay"></div>
    <div class="hero-ray"></div>
    <div class="hero-ray-2"></div>
    <div class="page-hero-wave">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,40 C320,80 800,0 1440,50 L1440,80 L0,80 Z" fill="#ffffff"/>
        </svg>
    </div>
    <div class="hero-badges">
        <div class="hero-badge-pill"><span class="dot"></span>Destinasi Wisata</div>
        <div class="hero-badge-pill">Maluku Tengah</div>
    </div>
    <div class="cuaca-floating">
        <div class="cuaca-mini-header">🌤 Cuaca Hari Ini</div>
        <div class="cuaca-mini-main">
            <div class="cuaca-mini-suhu" id="suhu">--°</div>
            <div class="cuaca-mini-icon">☀️</div>
        </div>
        <div class="cuaca-mini-status" id="status">Memuat...</div>
        <div class="cuaca-mini-info">
            <span>💧 <b id="humidity">--%</b></span>
            <span>🌬 <b id="wind">-- km/j</b></span>
        </div>
    </div>
    <div class="page-hero-content">
        <div class="hero-eyebrow">Profil Destinasi Wisata</div>
        <h1 class="page-hero-title">Pantai Liang<br><em>(Hunimua)</em></h1>
        <p class="hero-sub">Desa Liang · Kec. Salahutu · Kabupaten Maluku Tengah</p>
    </div>
    <div class="hero-stats">
        <div class="hero-stat-card">
            <div class="hero-stat-num">40 <span>km</span></div>
            <div class="hero-stat-label">Dari Kota Ambon</div>

    </div>
</section>

<!-- ABOUT -->
<section class="section-about" id="tentang">
    <div class="about-grid">
        <div class="about-text reveal">
            <div class="section-eyebrow">Tentang Pantai Liang</div>
            <h2 class="section-title">Mutiara Bahari<br>di Jantung <em>Maluku</em></h2>
            <p><strong>Pantai Liang</strong>, yang juga dikenal sebagai Hunimua, merupakan salah satu permata alam terbaik yang dimiliki Pulau Ambon. Terletak di Desa Liang, Kecamatan Salahutu, Kabupaten Maluku Tengah, destinasi ini berjarak sekitar 40 kilometer dari pusat Kota Ambon.</p>
            <p>Keindahan Pantai Liang terpancar dari hamparan pasir putih yang lembut,berpadu dengan air laut yang jernih berwarna biru kehijauan. Gradasi warna laut yang alami serta kejernihan airnya menghadirkan pesona visual yang menenangkan sekaligus memikat.</p>
            <p>Ombaknya yang relatif tenang membuatnya cocok untuk berenang, bersantai, maupun menikmati keindahan alam bersama keluarga dalam suasana tropis yang autentik.</p>

            <!-- ── Sejarah Singkat ── -->
            <div class="sejarah-box">
                <div class="sejarah-label">📜 Sejarah Singkat</div>
                <p class="sejarah-intro">
                    Nama <strong>Hunimua</strong> berasal dari bahasa daerah setempat dan melekat erat pada identitas Desa Liang, sebuah negeri tua yang dihuni masyarakat Muslim dan tergabung dalam konfederasi adat <em>Uli Sailesi</em> sejak masa lampau. Pantai ini telah lama menjadi bagian dari kehidupan sehari-hari masyarakat Liang — digunakan sebagai jalur penyeberangan dan tambatan perahu nelayan tradisional sebelum akhirnya dikenal luas sebagai destinasi wisata.
                </p>
                <div class="sejarah-timeline">
                    <div class="st-item">
                        <div class="st-year">1980</div>
                        <div class="st-desc">Mulai dikelola secara resmi oleh Dinas Pariwisata Provinsi Maluku sebagai kawasan wisata pantai.</div>
                    </div>
                    <div class="st-item">
                        <div class="st-year">1990</div>
                        <div class="st-desc">Dinobatkan oleh <strong>UNDP-PBB</strong> sebagai pantai terindah di Indonesia — penghargaan bergengsi yang mengharumkan nama Maluku di kancah internasional.</div>
                    </div>
                    <div class="st-item">
                        <div class="st-year">Kini</div>
                        <div class="st-desc">Tetap menjadi ikon pariwisata Pulau Ambon, mempertahankan keaslian alamnya di tengah perkembangan destinasi wisata baru.</div>
                    </div>
                </div>
            </div>

            <div class="tag-row">
                <span class="tag">🏊 Renang</span>
                <span class="tag">🌅 Sunset View</span>
                <span class="tag">👨‍👩‍👧 Wisata Keluarga</span>
                <span class="tag">🏖️ Bersantai</span>
            </div>
        </div>
        <div class="about-visual reveal">
            <div class="acard-ribbon">🏆 Pantai Terbaik Maluku</div>
            <div class="acard acard-main">
                <img src="{{ asset('t.jpeg') }}" alt="Pantai Liang – Pemandangan Utama">
            </div>
            <div class="acard acard-secondary">
                <img src="{{ asset('c.jpeg') }}" alt="Pantai Liang – Pasir Putih">
            </div>
            <div class="acard-tag">Hunimua Beach</div>
        </div>
    </div>
</section>

<!-- KEUNIKAN -->
<section class="section-keunikan" id="keunikan">
    <svg class="wave-divider" viewBox="0 0 1440 55" xmlns="http://www.w3.org/2000/svg" style="margin-top:-1px">
        <path d="M0,28 C480,55 960,0 1440,28 L1440,0 L0,0 Z" fill="#ffffff"/>
    </svg>
    <div class="keunikan-header reveal">
        <div class="section-eyebrow">Keunikan & Daya Tarik</div>
        <h2 class="section-title">Mengapa Pantai Liang<br>Begitu <em>Istimewa?</em></h2>
        <p>Setiap sudut Pantai Liang menyimpan pesona tersendiri — dari permukaan hingga dasar laut.</p>
    </div>
    <div class="keunikan-grid">
        <div class="k-card reveal"><div class="k-icon">🌊</div><h3 class="k-title">Air Biru yang Jernih</h3><p class="k-desc">Air laut yang benar-benar bersih dan bening. Dari tepi pantai, dasar laut sudah terlihat jelas.</p></div>
        <div class="k-card reveal" style="transition-delay:.07s"><div class="k-icon">🐠</div><h3 class="k-title">Keanekaragaman Laut</h3><p class="k-desc">Terumbu karang yang masih terjaga baik, cocok untuk  bersantai.</p></div>
        <div class="k-card reveal" style="transition-delay:.14s"><div class="k-icon">🌅</div><h3 class="k-title">Pemandangan Sunset yang Tenang</h3><p class="k-desc">Matahari terbenam langsung di garis laut, menciptakan warna langit yang indah.</p></div>
        <div class="k-card reveal" style="transition-delay:.21s"><div class="k-icon">🌳</div><h3 class="k-title">Nuansa Pantai yang Asri</h3><p class="k-desc">Pepohonan di sepanjang pantai memberikan keteduhan alami yang menyejukkan.</p></div>
        <div class="k-card reveal" style="transition-delay:.28s"><div class="k-icon">🍽️</div><h3 class="k-title">Jajanan Sederhana yang Nikmat</h3><p class="k-desc">Warung-warung yang menjual makanan seperti rujak, kelapa muda,mie telur dll.</p></div>
        <div class="k-card reveal" style="transition-delay:.35s"><div class="k-icon">🌿</div><h3 class="k-title">Suasana Sepi dan Alami</h3><p class="k-desc">Ideal untuk mencari ketenangan, karena lokasinya yang jauh dari pusat kota.</p></div>
    </div>
    <svg class="wave-divider" viewBox="0 0 1440 55" xmlns="http://www.w3.org/2000/svg" style="margin-top:4rem">
        <path d="M0,28 C480,0 960,55 1440,28 L1440,55 L0,55 Z" fill="#ffffff"/>
    </svg>
</section>

<!-- GALERI -->
<section class="section-galeri" id="galeri">
    <div class="galeri-header reveal">
        <div class="galeri-header-row">
            <div>
                <div class="section-eyebrow">Galeri Foto</div>
                <h2 class="section-title"><br><em>Eksplorasi Keindahan Pantai Liang Yang Memikat Hati</em></h2>
            </div>
            <div class="galeri-filter">
                <button class="filter-btn active" data-filter="semua">🌴 Semua</button>
                <button class="filter-btn" data-filter="pantai">🏖 Pantai</button>
                <button class="filter-btn" data-filter="perahu">⛵ Perahu</button>
            </div>
        </div>
    </div>

    <div class="galeri-grid reveal" id="galeriGrid">
        <div class="g-item g1" data-filter="pantai" data-src="{{ asset('a.jpeg') }}" data-caption="Panorama utama Pantai Liang — gradasi toska yang memesona">
            <img src="{{ asset('a.jpeg') }}" alt="Panorama Utama">
            <div class="g-overlay"><div class="g-tag">Pantai</div><div class="g-caption">Panorama Utama</div></div>
        </div>
        <div class="g-item g2" data-filter="pantai" data-src="{{ asset('liang2.jpeg') }}" data-caption="Pantai Liang">
            <img src="{{ asset('liang2.jpeg') }}" alt="Pantai">
            <div class="g-overlay"><div class="g-tag">Pantai</div><div class="g-caption">Pantai Liang</div></div>
        </div>
        <div class="g-item g3" data-filter="pantai" data-src="{{ asset('liang3.jpeg') }}" data-caption="Pantai Liang">
            <img src="{{ asset('liang3.jpeg') }}" alt="Pantai">
            <div class="g-overlay"><div class="g-tag">Pantai</div><div class="g-caption">Pantai Liang</div></div>
        </div>
        <div class="g-item g4" data-filter="pantai" data-src="{{ asset('c.jpeg') }}" data-caption="Pantai Liang">
            <img src="{{ asset('c.jpeg') }}" alt="Pantai">
            <div class="g-overlay"><div class="g-tag">Pantai</div><div class="g-caption">Pantai Liang</div></div>
        </div>
        <div class="g-item g5" data-filter="pantai" data-src="{{ asset('s.jpeg') }}" data-caption="Pemandangan Pantai Liang">
            <img src="{{ asset('s.jpeg') }}" alt="Pemandangan">
            <div class="g-overlay"><div class="g-tag">Pantai</div><div class="g-caption">Panorama Pantai</div></div>
        </div>
        <div class="g-item g6" data-filter="pantai" data-src="{{ asset('b.jpg') }}" data-caption="Air toska jernih yang menjadi ciri khas Pantai Liang">
            <img src="{{ asset('b.jpg') }}" alt="Air Jernih">
            <div class="g-overlay"><div class="g-tag">Pantai</div><div class="g-caption">Air Toska Jernih</div></div>
        </div>
        <div class="g-item g7" data-filter="perahu" data-src="{{ asset('u.jpeg') }}" data-caption="Pemandangan di lepas pantai Liang">
            <img src="{{ asset('u.jpeg') }}" alt="Perahu">
            <div class="g-overlay"><div class="g-tag">Perahu</div><div class="g-caption">Pemandangan Laut</div></div>
        </div>
    </div>

    <div class="galeri-footer reveal">
        <a href="{{ route('galeri') }}" class="btn-outline">📷 Lihat Semua Foto &nbsp;→</a>
    </div>
</section>

<!-- ══════════════════════════════════════════════
     SECTION TIKET & MUSIM
══════════════════════════════════════════════ -->
<section class="section-tiket" id="tiket">

    <!-- wave atas — fill putih agar menyambung dari section galeri -->
    <svg class="wave-divider" viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="position:absolute;top:0;left:0;right:0;z-index:1">
        <path d="M0,30 C360,60 1080,0 1440,30 L1440,0 L0,0 Z" fill="#ffffff"/>
    </svg>

    <!-- lingkaran dekorasi -->
    <div class="tiket-bg-circle c1"></div>
    <div class="tiket-bg-circle c2"></div>
    <div class="tiket-bg-circle c3"></div>

    <div class="tiket-layout reveal" style="padding-top:2rem">

        <!-- ─── KOLOM KIRI: Kartu Tiket ─── -->
        <div>
            <div class="tiket-card">

                <!-- Header -->
                <div class="tiket-card-head">
                    <div class="tiket-head-label">🎟 Informasi Tiket Masuk</div>
                    <div class="tiket-head-title">Pantai Liang<br><em style="font-style:italic;font-weight:300">Hunimua Beach</em></div>
                    <div class="tiket-head-sub">Desa Liang -· Kab. Maluku Tengah</div>
                </div>

                <!-- Perforasi -->
                <div class="tiket-perf">
                    <div class="tiket-perf-dots"></div>
                </div>

                <!-- Baris harga -->
                <div class="tiket-card-body">
                    <div class="tiket-row">
                        <div class="tiket-row-left">
                            <div class="tiket-row-icon">👨</div>
                            <span class="tiket-row-label">Dewasa</span>
                        </div>
                        <span class="tiket-row-price">Rp 10.000</span>
                    </div>
                    <div class="tiket-row">
                        <div class="tiket-row-left">
                            <div class="tiket-row-icon">🧒</div>
                            <span class="tiket-row-label">Anak-anak</span>
                        </div>
                        <span class="tiket-row-price">Rp 5.000</span>
                    </div>
                    <div class="tiket-row">
                        <div class="tiket-row-left">
                            <div class="tiket-row-icon">🏍</div>
                            <span class="tiket-row-label">Sepeda Motor</span>
                        </div>
                        <span class="tiket-row-price">Rp 5.000</span>
                    </div>
                    <div class="tiket-row">
                        <div class="tiket-row-left">
                            <div class="tiket-row-icon">🚗</div>
                            <span class="tiket-row-label">Mobil</span>
                        </div>
                        <span class="tiket-row-price">Rp 10.000</span>
                    </div>
                </div>

                <!-- Footer tiket -->
                <div class="tiket-card-foot">
                    <div class="tiket-card-foot-dot"></div>
                    <span>Buka setiap hari &nbsp;·&nbsp; <strong style="color:var(--ocean-dark)">08.00 – 19.00 WIT</strong></span>
                </div>
            </div>
        </div>

        <!-- ─── KOLOM KANAN: Musim & Kondisi ─── -->
        <div class="musim-col">

            <div class="musim-heading">
                <div class="section-eyebrow">Panduan Berkunjung</div>
                <h2 class="section-title">
                    Waktu Terbaik untuk<br><em>Menikmati Pantai</em>
                </h2>
                <p style="font-size:0.92rem;color:var(--text-mid);line-height:1.75">
                    Pilih waktu yang tepat agar pengalaman wisata Anda semakin sempurna — ombak tenang, langit cerah, dan air laut yang jernih memukau.
                </p>
            </div>

            <!-- Kartu musim terbaik -->
            <div class="musim-best-card">
                <div class="musim-best-badge">⭐ Musim Terbaik</div>
                <h3>Musim Kemarau</h3>
                <p>Cuaca lebih cerah, ombak lebih tenang, dan air laut tampak lebih jernih dibanding musim hujan. Waktu ideal untuk snorkeling dan menikmati panorama dari tepi pantai.</p>
                <div class="musim-months">
                    <div class="musim-month-pill"><span class="m-icon">☀️</span><span class="m-name">Mei</span></div>
                    <div class="musim-month-pill"><span class="m-icon">☀️</span><span class="m-name">Juni</span></div>
                    <div class="musim-month-pill"><span class="m-icon">🌤</span><span class="m-name">Juli</span></div>
                    <div class="musim-month-pill"><span class="m-icon">🌤</span><span class="m-name">Agustus</span></div>
                    <div class="musim-month-pill"><span class="m-icon">☀️</span><span class="m-name">September</span></div>
                </div>
            </div>

            <!-- Kondisi cuaca rata-rata -->
            <div class="musim-cond-grid">
                <div class="musim-cond-card">
                    <div class="musim-cond-icon">🌡️</div>
                    <div class="musim-cond-label">Suhu Rata-rata</div>
                    <div class="musim-cond-value">27 – 31 °C</div>
                </div>
                <div class="musim-cond-card">
                    <div class="musim-cond-icon">🌊</div>
                    <div class="musim-cond-label">Kondisi Ombak</div>
                    <div class="musim-cond-value">Tenang & Jernih</div>
                </div>
                <div class="musim-cond-card">
                    <div class="musim-cond-icon">💧</div>
                    <div class="musim-cond-label">Kelembaban</div>
                    <div class="musim-cond-value">70 – 80 %</div>
                </div>
                <div class="musim-cond-card">
                    <div class="musim-cond-icon">🌬️</div>
                    <div class="musim-cond-label">Angin</div>
                    <div class="musim-cond-value">10 – 18 km/j</div>
                </div>
            </div>

        </div>
    </div>

    <!-- wave bawah -->
    <svg class="wave-divider" viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" style="position:relative;z-index:1;margin-top:4rem">
        <path d="M0,30 C480,0 960,60 1440,30 L1440,60 L0,60 Z" fill="#ffffff"/>
    </svg>
</section>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox" onclick="handleLbClick(event)">
    <button class="lb-close" onclick="closeLightbox()">✕</button>
    <button class="lb-nav lb-prev" onclick="navLb(-1);event.stopPropagation()">‹</button>
    <button class="lb-nav lb-next" onclick="navLb(1);event.stopPropagation()">›</button>
    <div class="lb-inner" onclick="event.stopPropagation()">
        <img src="" alt="" id="lb-img">
        <div class="lb-caption" id="lb-caption"></div>
    </div>
</div>

<script>
    /* Scroll Reveal */
    const obs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); }
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

    /* Filter Galeri */
    const allItems = Array.from(document.querySelectorAll('.g-item'));
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const cat = btn.dataset.filter;
            allItems.forEach(item => {
                const match = cat === 'semua' || item.dataset.filter === cat;
                item.classList.toggle('filter-hidden', !match);
            });
            rebuildPhotos();
        });
    });

    /* Lightbox */
    let photos = [], curIdx = 0;
    function rebuildPhotos() {
        photos = allItems
            .filter(el => !el.classList.contains('filter-hidden'))
            .map((el, i) => {
                el.onclick = () => openLightbox(i);
                return { src: el.dataset.src, caption: el.dataset.caption };
            });
    }
    function openLightbox(idx) {
        curIdx = idx; renderLb();
        document.getElementById('lightbox').classList.add('open');
        document.body.style.overflow = 'hidden';
    }
    function closeLightbox() {
        document.getElementById('lightbox').classList.remove('open');
        document.body.style.overflow = '';
    }
    function navLb(dir) { curIdx = (curIdx + dir + photos.length) % photos.length; renderLb(); }
    function renderLb() {
        document.getElementById('lb-img').src             = photos[curIdx].src;
        document.getElementById('lb-caption').textContent = photos[curIdx].caption;
    }
    function handleLbClick(e) { if (e.target === document.getElementById('lightbox')) closeLightbox(); }
    document.addEventListener('keydown', e => {
        if (!document.getElementById('lightbox').classList.contains('open')) return;
        if (e.key === 'ArrowRight') navLb(1);
        if (e.key === 'ArrowLeft')  navLb(-1);
        if (e.key === 'Escape')     closeLightbox();
    });

    /* Weather API */
    async function getWeather() {
        try {
            const lat = -3.5794, lon = 128.3247;
            const res  = await fetch(`https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${lon}&current=temperature_2m,relative_humidity_2m,wind_speed_10m,weather_code`);
            const data = await res.json();
            document.getElementById('suhu').textContent     = Math.round(data.current.temperature_2m) + '°';
            document.getElementById('humidity').textContent = data.current.relative_humidity_2m + '%';
            document.getElementById('wind').textContent     = Math.round(data.current.wind_speed_10m) + ' km/j';
            const code = data.current.weather_code;
            let status = 'Cerah', icon = '☀️';
            if (code >= 1  && code <= 3)  { status = 'Berawan';      icon = '⛅'; }
            if (code >= 45 && code <= 48) { status = 'Berkabut';     icon = '🌫️'; }
            if (code >= 51 && code <= 67) { status = 'Hujan Ringan'; icon = '🌦️'; }
            if (code >= 80 && code <= 99) { status = 'Hujan';        icon = '🌧️'; }
            document.getElementById('status').textContent          = status;
            document.querySelector('.cuaca-mini-icon').textContent  = icon;
        } catch (err) {
            document.getElementById('status').textContent = 'Cuaca tidak tersedia';
        }
    }
    getWeather();
    setInterval(getWeather, 600000);

    rebuildPhotos();
</script>

</body>
</html>
