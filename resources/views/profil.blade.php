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
            gap: 0.75rem;
        }
        .nav-logo {
            font-family: 'Fraunces', serif; font-size: 1.3rem; font-weight: 400;
            color: var(--ink); text-decoration: none;
            display: flex; align-items: center; gap: 0.5rem;
            flex-shrink: 0;
        }
        .nav-logo strong { color: var(--ocean); font-weight: 600; }
        .nav-right { display: flex; align-items: center; gap: 0.5rem; }
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

        /* Hamburger toggle — tersembunyi di desktop, muncul di mobile */
        .nav-burger {
            display: none;
            align-items: center; justify-content: center;
            width: 40px; height: 40px; flex-shrink: 0;
            background: var(--sky);
            border: 1.5px solid rgba(26,155,191,0.25);
            border-radius: 12px;
            cursor: pointer;
            padding: 0;
        }
        .nav-burger span {
            display: block; width: 18px; height: 2px;
            background: var(--ocean-dark); border-radius: 2px;
            position: relative;
            transition: transform 0.25s ease, opacity 0.2s ease, background 0.2s ease;
        }
        .nav-burger span::before,
        .nav-burger span::after {
            content: ''; position: absolute; left: 0; width: 18px; height: 2px;
            background: var(--ocean-dark); border-radius: 2px;
            transition: transform 0.25s ease, top 0.25s ease, opacity 0.2s ease;
        }
        .nav-burger span::before { top: -6px; }
        .nav-burger span::after  { top: 6px; }
        .nav-burger.open span { background: transparent; }
        .nav-burger.open span::before { top: 0; transform: rotate(45deg); }
        .nav-burger.open span::after  { top: 0; transform: rotate(-45deg); }

        @media (max-width: 768px) {
            .navbar { padding: 0 1.25rem; height: 60px; }
            .nav-burger { display: flex; }
            .nav-menu {
                position: fixed; top: 60px; left: 0; right: 0;
                flex-direction: column; align-items: stretch; gap: 0;
                background: var(--white);
                border-top: 1px solid var(--border);
                box-shadow: 0 16px 30px rgba(13,95,120,0.12);
                max-height: 0; overflow: hidden;
                transition: max-height 0.3s ease;
                padding: 0 0.75rem;
            }
            .nav-menu.open { max-height: 340px; padding: 0.6rem 0.75rem; }
            .nav-menu li { width: 100%; }
            .nav-link {
                display: block; width: 100%;
                font-size: 0.95rem; padding: 0.85rem 1rem;
                border-radius: 12px;
            }
            .nav-link.special { font-weight: 600; color: var(--ocean); }
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
            background: url('{{ asset('liang3.jpeg') }}') center/cover no-repeat;
        }
        .page-hero-overlay {
            position: absolute; inset: 0;
            background: linear-gradient(to bottom, rgba(10,30,45,0.25) 0%, rgba(10,30,45,0.1) 35%, rgba(10,30,45,0.55) 70%, rgba(10,30,45,0.78) 100%);
        }
        .hero-ray   { position:absolute; top:0; left:15%; width:2px; height:100%; background:linear-gradient(to bottom,rgba(255,255,255,0.18),transparent); transform:rotate(-5deg); animation:ray-pulse 5s ease-in-out infinite; }
        .hero-ray-2 { position:absolute; top:0; left:28%; width:1px; height:100%; background:linear-gradient(to bottom,rgba(255,255,255,0.09),transparent); transform:rotate(-3deg); animation:ray-pulse 7s ease-in-out infinite reverse; }
        @keyframes ray-pulse { 0%,100%{opacity:.5} 50%{opacity:1} }

        .page-hero-wave { position:absolute; bottom:0; left:0; right:0; }

        .hero-badges { position:absolute; top:90px; left:5rem; display:flex; gap:0.6rem; z-index:4; flex-wrap: wrap; }
        .hero-badge-pill {
            display:inline-flex; align-items:center; gap:0.4rem;
            padding:0.35rem 0.9rem;
            background:rgba(255,255,255,0.18); backdrop-filter:blur(12px);
            border:1px solid rgba(255,255,255,0.35); border-radius:50px;
            font-size:0.7rem; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:white;
            white-space: nowrap;
        }
        .hero-badge-pill .dot { width:5px; height:5px; border-radius:50%; background:var(--gold); animation:blink 2s ease infinite; }
        @keyframes blink { 0%,100%{opacity:1} 50%{opacity:.2} }

        .page-hero-content { position:relative; z-index:4; padding:0 5rem; max-width:900px; }
        .hero-eyebrow { font-size:0.72rem; letter-spacing:0.2em; text-transform:uppercase; color:rgba(255,255,255,0.75); font-weight:500; margin-bottom:1.2rem; display:flex; align-items:center; gap:0.8rem; }
        .hero-eyebrow::before { content:''; width:24px; height:1px; background:rgba(255,255,255,0.5); }
        .page-hero-title { font-family:'Fraunces',serif; font-size:clamp(2.6rem,9vw,6.5rem); font-weight:300; line-height:1.05; color:white; letter-spacing:-0.02em; }
        .page-hero-title em { font-style:italic; color:#a8eae7; }
        .hero-sub { margin-top:1rem; font-size:clamp(0.85rem,2.6vw,1rem); color:rgba(255,255,255,0.7); font-weight:300; }

        .hero-stats { position:absolute; bottom:80px; left:5rem; right: 5rem; z-index:4; display:flex; gap:1rem; flex-wrap: wrap; }
        .hero-stat-card { background:rgba(255,255,255,0.13); backdrop-filter:blur(16px); border:1px solid rgba(255,255,255,0.25); border-radius:14px; padding:0.9rem 1.3rem; min-width:110px; transition:background 0.3s; }
        .hero-stat-card:hover { background:rgba(255,255,255,0.22); }
        .hero-stat-num { font-family:'Fraunces',serif; font-size:1.6rem; font-weight:300; color:white; line-height:1; }
        .hero-stat-num span { font-size:0.85rem; }
        .hero-stat-label { font-size:0.65rem; color:rgba(255,255,255,0.6); letter-spacing:0.08em; text-transform:uppercase; margin-top:0.25rem; }

        @media (max-width:768px) {
            .hero-badges,.hero-stats { left:1.25rem; right: 1.25rem; }
            .page-hero-content { padding:0 1.25rem; }
            .hero-stats { flex-wrap:wrap; gap:0.5rem; bottom:64px; }
            .hero-stat-card { padding: 0.7rem 1rem; min-width: 96px; }
        }
        @media (max-width:480px) {
            .page-hero { min-height: 560px; }
            .hero-badges { top: 74px; gap: 0.4rem; }
            .hero-badge-pill { font-size: 0.62rem; padding: 0.3rem 0.7rem; }
            .hero-stats { bottom: 56px; }
            .hero-eyebrow { margin-bottom: 0.8rem; }
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

        /* Grid seragam — semua kotak ukuran sama, di-looping otomatis dari database */
        .galeri-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0.8rem;
        }
        .g-item { overflow:hidden; border-radius:14px; position:relative; cursor:pointer; aspect-ratio: 1 / 1; }
        .g-item img { width:100%; height:100%; object-fit:cover; display:block; transition:transform 0.5s ease,filter 0.4s ease; filter:brightness(0.88); }
        .g-item:hover img { transform:scale(1.06); filter:brightness(1) saturate(1.15); }
        .g-overlay { position:absolute; inset:0; background:linear-gradient(to top,rgba(12,60,90,0.75) 0%,transparent 55%); opacity:0; transition:opacity 0.3s; display:flex; flex-direction:column; justify-content:flex-end; padding:1rem 1.2rem; }
        .g-item:hover .g-overlay { opacity:1; }
        .g-tag { font-size:0.64rem; letter-spacing:0.14em; text-transform:uppercase; color:#a8eae7; margin-bottom:0.2rem; font-weight:700; }
        .g-caption { font-size:0.82rem; color:white; line-height:1.3; }
        .g-item.filter-hidden { display:none; }

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
        @media (max-width: 600px) {
            .lb-close { top: 0.75rem; right: 0.75rem; width: 34px; height: 34px; font-size: 1.15rem; }
            .lb-nav { width: 38px; height: 38px; font-size: 1.1rem; }
            .lb-prev { left: 0.5rem; }
            .lb-next { right: 0.5rem; }
        }

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

        /* ══════════════════════════════
           ULASAN PENGUNJUNG
        ══════════════════════════════ */
        .section-ulasan {
            background: var(--white);
            padding: 6rem 5rem;
            position: relative;
            overflow: hidden;
        }
        .ulasan-wrap { max-width: 760px; margin: 0 auto; position: relative; z-index: 1; }
        .ulasan-alert {
            border-radius: 14px;
            padding: 0.9rem 1.2rem;
            font-size: 0.86rem;
            margin-bottom: 1.4rem;
        }
        .ulasan-alert-sukses {
            background: var(--teal-light);
            border: 1px solid rgba(45,191,184,0.4);
            color: var(--ocean-dark);
        }
        .ulasan-error {
            background: #fdeceb;
            border: 1px solid #f3b9b3;
            color: #b3261e;
            border-radius: 12px;
            padding: 0.6rem 1rem;
            font-size: 0.8rem;
            margin-bottom: 0.6rem;
        }
        .ulasan-form {
            background: var(--sky);
            border: 1px solid var(--sky-mid);
            border-radius: 20px;
            padding: 1.8rem;
            margin-bottom: 2.2rem;
        }
        .ulasan-form-row { display: flex; gap: 0.7rem; margin-bottom: 0.8rem; }
        .ulasan-input, .ulasan-select, .ulasan-textarea {
            font-family: 'Nunito Sans', sans-serif;
            border: 1px solid var(--sand-dark);
            border-radius: 12px;
            padding: 0.75rem 1rem;
            font-size: 0.88rem;
            color: var(--ink);
            background: var(--white);
            outline: none;
            transition: border-color 0.2s;
        }
        .ulasan-input:focus, .ulasan-select:focus, .ulasan-textarea:focus { border-color: var(--ocean); }
        .ulasan-input { flex: 1; }
        .ulasan-select { flex-shrink: 0; cursor: pointer; }
        .ulasan-textarea { width: 100%; resize: vertical; margin-bottom: 1rem; font-family: 'Nunito Sans', sans-serif; }
        .ulasan-submit {
            border: none; background: var(--ocean); color: white;
            padding: 0.75rem 2rem; border-radius: 50px;
            font-weight: 600; font-size: 0.85rem; cursor: pointer;
            font-family: 'Nunito Sans', sans-serif;
            transition: background 0.25s;
            width: auto;
        }
        .ulasan-submit:hover { background: var(--ocean-dark); }
        .ulasan-summary {
            display: flex; align-items: center; gap: 1.4rem;
            background: linear-gradient(135deg, var(--teal) 0%, var(--ocean) 100%);
            border-radius: 18px; padding: 1.4rem 1.8rem; margin-bottom: 1.8rem;
            color: white; position: relative; overflow: hidden;
        }
        .ulasan-summary::before {
            content: '💬'; position: absolute; right: 1rem; top: 50%; transform: translateY(-50%);
            font-size: 4rem; opacity: 0.15; pointer-events: none;
        }
        .ulasan-summary-score { font-family: 'Fraunces', serif; font-size: 2.6rem; font-weight: 300; line-height: 1; }
        .ulasan-summary-stars { font-size: 0.95rem; letter-spacing: 0.06em; margin-top: 0.25rem; }
        .ulasan-summary-text { font-size: 0.8rem; color: rgba(255,255,255,0.85); margin-top: 0.3rem; }
        .ulasan-summary-divider { width: 1px; height: 46px; background: rgba(255,255,255,0.3); }

        .ulasan-list { display: flex; flex-direction: column; gap: 1rem; }
        .ulasan-item {
            background: var(--white);
            border: 1px solid var(--sand-dark);
            border-radius: 16px;
            padding: 1.3rem 1.5rem;
            display: flex; gap: 1rem;
            transition: box-shadow 0.25s, transform 0.25s, border-color 0.25s;
            animation: ulasan-pop 0.4s ease;
        }
        @keyframes ulasan-pop {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .ulasan-item:hover { box-shadow: 0 10px 30px rgba(26,155,191,0.1); transform: translateY(-2px); border-color: rgba(26,155,191,0.25); }
        .ulasan-avatar {
            flex-shrink: 0; width: 42px; height: 42px; border-radius: 50%;
            background: linear-gradient(135deg, var(--teal) 0%, var(--ocean) 100%);
            display: flex; align-items: center; justify-content: center;
            font-family: 'Fraunces', serif; font-size: 1.1rem; color: white;
            box-shadow: 0 4px 12px rgba(26,155,191,0.25);
        }
        .ulasan-body { flex: 1; min-width: 0; }
        .ulasan-item-head { display: flex; justify-content: space-between; align-items: center; gap: 0.5rem; margin-bottom: 0.35rem; flex-wrap: wrap; }
        .ulasan-item-nama { font-family: 'Fraunces', serif; font-size: 1rem; font-weight: 400; color: var(--ink); }
        .ulasan-item-rating { color: var(--gold-dark); font-size: 0.85rem; letter-spacing: 0.05em; }
        .ulasan-item-komentar { font-size: 0.88rem; line-height: 1.7; color: var(--ink-soft); }
        .ulasan-item-waktu { font-size: 0.7rem; color: var(--text-muted); margin-top: 0.6rem; letter-spacing: 0.04em; display: flex; align-items: center; gap: 0.35rem; }
        .ulasan-empty, .ulasan-loading {
            font-size: 0.9rem; color: var(--text-muted); text-align: center;
            padding: 2rem 1rem; border: 1px dashed var(--sand-dark); border-radius: 16px;
        }
        .ulasan-empty span, .ulasan-loading span { display: block; font-size: 1.8rem; margin-bottom: 0.5rem; }

        /* ─── RESPONSIVE ─────────────────── */
        @media (max-width: 1024px) {
            .page-hero,.section-about,.section-keunikan,.section-galeri,.section-tiket,.section-ulasan { padding-left:3rem; padding-right:3rem; }
            .keunikan-grid { grid-template-columns:repeat(2,1fr); }
            .galeri-grid { grid-template-columns:repeat(3,1fr); }
        }
        @media (max-width: 768px) {
            .page-hero { min-height:100svh; }
            .hero-badges,.hero-stats { left:1.5rem; }
            .page-hero-content { padding:0 1.5rem; }
            .about-grid,.keunikan-grid { grid-template-columns:1fr; }
            .about-visual { height:300px; }
            .section-about,.section-keunikan,.section-galeri,.section-tiket,.section-ulasan { padding:4rem 1.5rem; }
            .galeri-header-row { flex-direction:column; align-items:flex-start; gap:1rem; }
            .galeri-grid { grid-template-columns:repeat(2,1fr); }
            .tiket-layout { grid-template-columns:1fr; }
            .musim-cond-grid { grid-template-columns:1fr 1fr; }
            .ulasan-form-row { flex-direction: column; }
        }

        /* Breakpoint tambahan untuk layar sangat kecil (HP kecil / lama) */
        @media (max-width: 480px) {
            .section-about,.section-keunikan,.section-galeri,.section-tiket,.section-ulasan { padding:3rem 1.1rem; }
            .section-title { font-size: clamp(1.6rem, 7vw, 2.2rem); margin-bottom: 1rem; }
            .section-about::before { font-size: 9rem; bottom: -1.5rem; right: -1rem; }

            .about-visual { height: 240px; }
            .acard-main { width: 62%; height: 100%; }
            .acard-secondary { width: 44%; height: 55%; left: 0; }
            .acard-tag { font-size: 0.65rem; padding: 0.4rem 0.9rem; right: 8px; }
            .acard-ribbon { font-size: 0.6rem; padding: 0.35rem 1rem 0.35rem 1.4rem; }

            .keunikan-grid { gap: 1rem; }
            .k-card { padding: 1.5rem 1.3rem; }

            .galeri-grid { grid-template-columns: repeat(2, 1fr); gap: 0.6rem; }

            .tiket-card-head { padding: 1.5rem 1.5rem 1.4rem; }
            .tiket-head-title { font-size: 1.35rem; }
            .tiket-card-body { padding: 1.3rem 1.5rem 1.5rem; }
            .tiket-card-foot { padding: 0.9rem 1.5rem 1.2rem; font-size: 0.7rem; }

            .musim-cond-grid { grid-template-columns: 1fr 1fr; gap: 0.6rem; }
            .musim-best-card { padding: 1.3rem 1.4rem; }

            .ulasan-form { padding: 1.3rem; }
            .ulasan-submit { width: 100%; padding: 0.85rem 1.5rem; }
            .ulasan-summary { flex-wrap: wrap; gap: 0.8rem; padding: 1.2rem 1.4rem; }
            .ulasan-summary-divider { display: none; }
            .ulasan-item { padding: 1.1rem 1.2rem; }

            .btn-outline { width: 100%; text-align: center; }
        }

        /* Target sentuh lebih besar & aksesibilitas fokus untuk mobile */
        @media (hover: none) and (pointer: coarse) {
            .nav-link, .filter-btn, .btn-outline, .ulasan-submit,
            .map-btn, .load-btn, .f-btn { min-height: 44px; display: inline-flex; align-items: center; justify-content: center; }
        }
        a:focus-visible, button:focus-visible, input:focus-visible, textarea:focus-visible, select:focus-visible {
            outline: 2px solid var(--ocean); outline-offset: 2px;
        }

        /* ══════════════════════════════
   TOMBOL SEARCH DI NAVBAR
══════════════════════════════ */
.nav-search-btn {
    background: var(--sky);
    border: 1.5px solid rgba(26,155,191,0.25);
    border-radius: 50px;
    padding: 0.38rem 0.85rem;
    font-size: 0.88rem;
    color: var(--ocean);
    cursor: pointer;
    transition: background 0.2s, border-color 0.2s, transform 0.15s;
    display: flex; align-items: center; gap: 0.4rem;
    font-family: 'Nunito Sans', sans-serif;
    font-weight: 600;
    flex-shrink: 0;
}
.nav-search-btn::after {
    content: 'Ctrl K';
    font-size: 0.65rem; color: var(--text-muted);
    background: var(--white);
    border: 1px solid var(--sand-dark);
    border-radius: 4px;
    padding: 0.05rem 0.35rem;
    letter-spacing: 0.04em;
}
.nav-search-btn:hover {
    background: rgba(26,155,191,0.12);
    border-color: var(--ocean);
    transform: translateY(-1px);
}
@media (max-width: 768px) {
    .nav-search-btn::after { display: none; }
    .nav-search-btn { width: 40px; height: 40px; padding: 0; border-radius: 12px; justify-content: center; }
    .nav-search-btn span { display: none; }
}

/* ══════════════════════════════
   BACKDROP
══════════════════════════════ */
.search-backdrop {
    position: fixed; inset: 0; z-index: 2000;
    background: rgba(10, 25, 40, 0.55);
    backdrop-filter: blur(6px);
    opacity: 0; pointer-events: none;
    transition: opacity 0.25s ease;
}
.search-backdrop.open { opacity: 1; pointer-events: all; }

/* ══════════════════════════════
   MODAL
══════════════════════════════ */
.search-modal {
    position: fixed; top: 0; left: 0; right: 0;
    z-index: 2001;
    display: flex; justify-content: center;
    padding: 5vh 1rem 0;
    pointer-events: none;
    transform: translateY(-18px);
    opacity: 0;
    transition: transform 0.28s cubic-bezier(.22,1,.36,1), opacity 0.22s ease;
}
.search-modal.open { transform: translateY(0); opacity: 1; pointer-events: all; }

.search-modal-inner {
    background: var(--white);
    border: 1px solid var(--sky-mid);
    border-radius: 22px;
    width: 100%; max-width: 600px;
    box-shadow: 0 32px 80px rgba(10,40,60,0.22), 0 0 0 1px rgba(26,155,191,0.08);
    overflow: hidden;
}

/* ── Input bar ── */
.search-input-wrap {
    display: flex; align-items: center; gap: 0.8rem;
    padding: 1.1rem 1.4rem;
    border-bottom: 1px solid var(--sky-mid);
}
.search-ico { font-size: 1.05rem; flex-shrink: 0; }
.search-input {
    flex: 1; border: none; outline: none;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 1rem; color: var(--ink);
    background: transparent;
    caret-color: var(--ocean);
}
.search-input::placeholder { color: var(--text-muted); }
.search-esc-btn {
    background: var(--sky); border: 1px solid var(--sky-mid);
    border-radius: 6px; padding: 0.18rem 0.55rem;
    font-size: 0.68rem; font-weight: 700; color: var(--text-muted);
    cursor: pointer; font-family: 'Nunito Sans', sans-serif;
    transition: all 0.2s; flex-shrink: 0;
}
.search-esc-btn:hover { background: var(--sand); color: var(--ocean); }

/* ── Area hasil ── */
.search-results { min-height: 120px; max-height: 60vh; overflow-y: auto; }

/* Hint (shortcut chips) */
.search-hint { padding: 1.4rem 1.4rem 1rem; }
.search-hint-label {
    font-size: 0.68rem; letter-spacing: 0.14em; text-transform: uppercase;
    color: var(--text-muted); font-weight: 700; margin-bottom: 0.9rem;
}
.search-hint-grid { display: flex; flex-wrap: wrap; gap: 0.45rem; }
.sh-chip {
    display: inline-flex; align-items: center; gap: 0.3rem;
    padding: 0.35rem 0.85rem;
    background: var(--sky); border: 1px solid var(--sky-mid);
    border-radius: 50px; font-size: 0.78rem;
    color: var(--ocean-dark); text-decoration: none; font-weight: 600;
    transition: all 0.18s;
}
.sh-chip:hover { background: rgba(26,155,191,0.12); border-color: var(--ocean); transform: translateY(-1px); }

/* Daftar hasil */
.search-list { list-style: none; padding: 0.5rem 0.6rem 0.7rem; margin: 0; }
.search-list li a {
    display: flex; align-items: center; gap: 0.9rem;
    padding: 0.75rem 0.8rem; border-radius: 12px;
    text-decoration: none; color: inherit;
    transition: background 0.18s; outline: none;
    border: 1.5px solid transparent;
}
.search-list li a:hover,
.search-list li a:focus,
.search-list li.active a {
    background: var(--sky);
    border-color: rgba(26,155,191,0.2);
}
.sr-icon {
    width: 38px; height: 38px; flex-shrink: 0;
    background: var(--sky); border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.1rem; border: 1px solid var(--sky-mid);
}
.sr-body { flex: 1; min-width: 0; }
.sr-cat {
    font-size: 0.62rem; letter-spacing: 0.12em;
    text-transform: uppercase; color: var(--ocean);
    font-weight: 700; margin-bottom: 0.1rem;
}
.sr-title {
    font-family: 'Fraunces', serif; font-size: 0.97rem;
    font-weight: 400; color: var(--ink);
    white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
}
.sr-desc {
    font-size: 0.78rem; color: var(--text-muted);
    white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
}
.sr-arrow { color: var(--text-muted); font-size: 0.9rem; flex-shrink: 0; }

/* Kosong & loading */
.search-empty {
    padding: 2rem 1.4rem; text-align: center;
    font-size: 0.88rem; color: var(--text-muted);
    display: flex; flex-direction: column; align-items: center; gap: 0.5rem;
}
.search-empty span { font-size: 2rem; }
.search-loading {
    display: flex; justify-content: center; align-items: center; padding: 2rem;
}
.sl-spinner {
    width: 24px; height: 24px;
    border: 2.5px solid var(--sky-mid);
    border-top-color: var(--ocean);
    border-radius: 50%;
    animation: spin 0.7s linear infinite;
}
@keyframes spin { to { transform: rotate(360deg); } }

/* Footer keyboard hint */
.search-footer {
    display: flex; gap: 1.2rem; justify-content: flex-end;
    padding: 0.6rem 1.4rem;
    border-top: 1px solid var(--sky-mid);
    background: var(--sky);
    font-size: 0.68rem; color: var(--text-muted);
}
kbd {
    background: var(--white); border: 1px solid var(--sand-dark);
    border-radius: 4px; padding: 0.1rem 0.38rem;
    font-size: 0.65rem; font-family: inherit; color: var(--ink-soft);
}
@media (max-width: 600px) { .search-footer { display: none; } }

@media (max-width: 600px) {
    .search-modal { padding: 0; align-items: stretch; }
    .search-modal-inner { max-width: 100%; height: 100dvh; border-radius: 0; display: flex; flex-direction: column; }
    .search-results { flex: 1; max-height: none; }
    .search-input { font-size: 16px; } /* cegah auto-zoom Safari iOS */
}
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-container">
        <a href="#" class="nav-logo">🏖 Pantai <strong>Liang</strong></a>
        <div class="nav-right">
            <button class="nav-search-btn" id="navSearchBtn" type="button" title="Cari (Ctrl+K)">🔍 <span>Cari</span></button>
            <button class="nav-burger" id="navBurger" type="button" aria-label="Buka menu" aria-expanded="false" aria-controls="navMenu">
                <span></span>
            </button>
            <ul class="nav-menu" id="navMenu">
                <li><a href="#tentang"      class="nav-link">Beranda</a></li>
                <li><a href="/panduan_rute" class="nav-link">🗺 Panduan Rute</a></li>
                <li><a href="/fasilitas"    class="nav-link">Fasilitas</a></li>
                <li><a href="{{ route('galeri') }}" class="nav-link special">Galeri</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- ══════════════════════════════════════════════
     MODAL PENCARIAN GLOBAL (gaya command palette)
══════════════════════════════════════════════════ -->
<div class="search-backdrop" id="searchBackdrop"></div>
<div class="search-modal" id="searchModal" role="dialog" aria-modal="true" aria-label="Pencarian">
    <div class="search-modal-inner">
        <div class="search-input-wrap">
            <span class="search-ico">🔍</span>
            <input type="text" class="search-input" id="searchInput" placeholder="Cari fasilitas, rute, galeri, ulasan..." autocomplete="off">
            <button type="button" class="search-esc-btn" id="searchClose">ESC</button>
        </div>

        <div class="search-results">
            <!-- Hint kata kunci populer — tampil saat input kosong -->
            <div class="search-hint" id="searchHint">
                <div class="search-hint-label">Pencarian Populer</div>
                <div class="search-hint-grid">
                    <button type="button" class="sh-chip" data-q="parkir">🅿️ Parkir</button>
                    <button type="button" class="sh-chip" data-q="rute">🗺️ Rute</button>
                    <button type="button" class="sh-chip" data-q="toilet">🚻 Toilet</button>
                    <button type="button" class="sh-chip" data-q="Warung makan">🍽️ Warung makan</button>
                </div>
            </div>

            <!-- Loading -->
            <div class="search-loading" id="searchLoading" style="display:none">
                <div class="sl-spinner"></div>
            </div>

            <!-- Daftar hasil -->
            <ul class="search-list" id="searchList" style="display:none"></ul>

            <!-- Kosong -->
            <div class="search-empty" id="searchEmpty" style="display:none">
                <span>🔎</span>
                Tidak ada hasil untuk <strong id="emptyQ"></strong>
            </div>
        </div>

        <div class="search-footer">
            <span><kbd>↑</kbd><kbd>↓</kbd> pilih</span>
            <span><kbd>Enter</kbd> buka</span>
            <span><kbd>Esc</kbd> tutup</span>
        </div>
    </div>
</div>

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

{{--
    ══════════════════════════════════════════════
    GALERI — preview 7 foto pertama dari database (tabel galeris),
    urutan mengikuti kolom 'order'. Tombol "Lihat Semua Foto"
    mengarah ke halaman /galeri yang menampilkan semua foto.
    Grid dibuat seragam (kotak sama besar) supaya bisa di-loop
    otomatis tanpa perlu assign posisi manual per item.
══════════════════════════════════════════════ --}}
<section class="section-galeri" id="galeri">
    <div class="galeri-header reveal">
        <div class="galeri-header-row">
            <div>
                <div class="section-eyebrow">Galeri Foto</div>
                <h2 class="section-title">Ragam Pesona<br>di <em>Pantai Liang Hunimua</em></h2>
            </div>
            <div class="galeri-filter">
                <button class="filter-btn active" data-filter="semua">🌴 Semua</button>
                <button class="filter-btn" data-filter="pantai">🏖 Pantai</button>
            </div>
        </div>
    </div>

    <div class="galeri-grid reveal" id="galeriGrid">
        @foreach ($fotoPreview as $foto)
            <div class="g-item" data-filter="{{ $foto->category }}"
                 data-src="{{ $foto->image_url }}"
                 data-caption="{{ $foto->overlay_caption }}">
                <img src="{{ $foto->image_url }}" alt="{{ $foto->alt_text }}">
                <div class="g-overlay">
                    <div class="g-tag">{{ $foto->category_label }}</div>
                    <div class="g-caption">{{ $foto->overlay_caption }}</div>
                </div>
            </div>
        @endforeach
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
                    <div class="tiket-head-sub">Desa Liang · Kab. Maluku Tengah</div>
                </div>

                <!-- Perforasi -->
                <div class="tiket-perf">
                    <div class="tiket-perf-dots"></div>
                </div>

                <!-- Baris harga -->
                <div class="tiket-card-body">
                    @forelse ($tikets as $t)
                        <div class="tiket-row">
                            <div class="tiket-row-left">
                                <div class="tiket-row-icon">{{ $t->icon ?: '🎟' }}</div>
                                <span class="tiket-row-label">{{ $t->nama }}</span>
                            </div>
                            <span class="tiket-row-price">{{ $t->harga_format }}</span>
                        </div>
                    @empty
                        <div class="tiket-row">
                            <div class="tiket-row-left">
                                <span class="tiket-row-label">Informasi tiket belum tersedia.</span>
                            </div>
                        </div>
                    @endforelse
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

{{--
    ══════════════════════════════════════════════
    SECTION ULASAN PENGUNJUNG — versi database (MySQL)
    $ulasans dikirim dari ProfilController (sudah terurut terbaru).
    Tidak ada lagi script localStorage — semua server-rendered.
    ══════════════════════════════════════════════
--}}
<section class="section-ulasan" id="ulasan">
    <div class="ulasan-wrap reveal">
        <div class="section-eyebrow">Suara Pengunjung</div>
        <h2 class="section-title">Ulasan & <em>Pengalaman</em><br>Wisatawan</h2>

        @if (session('ulasan_sukses'))
            <div class="ulasan-alert ulasan-alert-sukses">
                {{ session('ulasan_sukses') }}
            </div>
        @endif

        {{-- Ringkasan Rating --}}
        @if ($ulasans->isNotEmpty())
            @php
                $rataRating = $ulasans->avg('rating');
                $bulat      = max(1, min(5, (int) round($rataRating)));
            @endphp
            <div class="ulasan-summary" id="ulasan-summary">
                <div>
                    <div class="ulasan-summary-score" id="us-score">{{ number_format($rataRating, 1) }}</div>
                    <div class="ulasan-summary-stars" id="us-stars">{{ str_repeat('⭐', $bulat) . str_repeat('☆', 5 - $bulat) }}</div>
                </div>
                <div class="ulasan-summary-divider"></div>
                <div class="ulasan-summary-text" id="us-text">Berdasarkan {{ $ulasans->count() }} ulasan pengunjung</div>
            </div>
        @endif

        {{-- Form Ulasan --}}
        <form class="ulasan-form" method="POST" action="{{ route('ulasan.store') }}#ulasan">
            @csrf

            @error('nama')
                <div class="ulasan-error">{{ $message }}</div>
            @enderror
            @error('komentar')
                <div class="ulasan-error">{{ $message }}</div>
            @enderror

            <div class="ulasan-form-row">
                <input id="ul-nama" name="nama" type="text" class="ulasan-input"
                       placeholder="Nama Anda" maxlength="40" value="{{ old('nama') }}" required>
                <select id="ul-rating" name="rating" class="ulasan-select">
                    <option value="5" {{ old('rating', 5) == 5 ? 'selected' : '' }}>⭐⭐⭐⭐⭐ Sangat Baik</option>
                    <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>⭐⭐⭐⭐ Baik</option>
                    <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>⭐⭐⭐ Cukup</option>
                    <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>⭐⭐ Kurang</option>
                    <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>⭐ Buruk</option>
                </select>
            </div>
            <textarea id="ul-komentar" name="komentar" class="ulasan-textarea" rows="3" maxlength="400"
                      placeholder="Bagikan pengalaman Anda di Pantai Liang..." required>{{ old('komentar') }}</textarea>
            <button type="submit" class="ulasan-submit">Kirim Ulasan</button>
        </form>

        {{-- Daftar Ulasan --}}
        <div class="ulasan-list" id="daftar-ulasan">
            @forelse ($ulasans as $u)
                <div class="ulasan-item">
                    <div class="ulasan-avatar">{{ $u->inisial }}</div>
                    <div class="ulasan-body">
                        <div class="ulasan-item-head">
                            <span class="ulasan-item-nama">{{ $u->nama }}</span>
                            <span class="ulasan-item-rating">{{ $u->bintang_terisi }}{{ $u->bintang_kosong }}</span>
                        </div>
                        <p class="ulasan-item-komentar">{{ $u->komentar }}</p>
                        <div class="ulasan-item-waktu">🕒 {{ $u->tanggal_indo }}</div>
                    </div>
                </div>
            @empty
                <p class="ulasan-empty"><span>🐚</span>Belum ada ulasan. Jadilah yang pertama membagikan pengalaman Anda!</p>
            @endforelse
        </div>
    </div>
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

    /* Navbar mobile (hamburger) */
    (function () {
        const burger = document.getElementById('navBurger');
        const menu   = document.getElementById('navMenu');
        if (!burger || !menu) return;

        function closeMenu() {
            menu.classList.remove('open');
            burger.classList.remove('open');
            burger.setAttribute('aria-expanded', 'false');
        }
        function toggleMenu() {
            const isOpen = menu.classList.toggle('open');
            burger.classList.toggle('open', isOpen);
            burger.setAttribute('aria-expanded', String(isOpen));
        }

        burger.addEventListener('click', toggleMenu);
        menu.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));
        document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMenu(); });
        window.addEventListener('resize', () => { if (window.innerWidth > 768) closeMenu(); });
    })();

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

/* ══════════════════════════════════════════════════════════════
   FITUR PENCARIAN GLOBAL — modal gaya command palette (Ctrl+K)
══════════════════════════════════════════════════════════════ */
document.addEventListener('DOMContentLoaded', function() {
    const AJAX_URL = '{{ route("cari.ajax") }}';
    const CARI_URL = '{{ route("cari") }}';

    const $btn      = document.getElementById('navSearchBtn');
    const $backdrop = document.getElementById('searchBackdrop');
    const $modal    = document.getElementById('searchModal');
    const $input    = document.getElementById('searchInput');
    const $close    = document.getElementById('searchClose');
    const $hint     = document.getElementById('searchHint');
    const $loading  = document.getElementById('searchLoading');
    const $list     = document.getElementById('searchList');
    const $empty    = document.getElementById('searchEmpty');
    const $emptyQ   = document.getElementById('emptyQ');

    if (!$btn || !$modal) {
        console.warn('Elemen pencarian tidak ditemukan pada halaman ini.');
        return;
    }

    let debTimer  = null;
    let activeIdx = -1;
    let items     = [];

    function openModal() {
        $backdrop.classList.add('open');
        $modal.classList.add('open');
        document.body.style.overflow = 'hidden';
        setTimeout(() => $input.focus(), 60);
    }

    function closeModal() {
        $backdrop.classList.remove('open');
        $modal.classList.remove('open');
        document.body.style.overflow = '';
        $input.value = '';
        resetResults();
    }

    function resetResults() {
        activeIdx = -1;
        items = [];
        $list.style.display    = 'none';
        $list.innerHTML        = '';
        $empty.style.display   = 'none';
        $loading.style.display = 'none';
        $hint.style.display    = 'block';
    }

    function showLoading() {
        $hint.style.display    = 'none';
        $empty.style.display   = 'none';
        $list.style.display    = 'none';
        $loading.style.display = 'flex';
    }

    function renderResults(hasil, q) {
        $loading.style.display = 'none';
        activeIdx = -1;

        if (!hasil || hasil.length === 0) {
            $list.style.display  = 'none';
            $empty.style.display = 'flex';
            $emptyQ.textContent  = '"' + q + '"';
            return;
        }

        $empty.style.display = 'none';
        $list.innerHTML = hasil.map(h => `
            <li>
                <a href="${h.url}">
                    <span class="sr-icon">${h.ikon}</span>
                    <span class="sr-body">
                        <span class="sr-cat">${h.kategori}</span>
                        <span class="sr-title">${h.judul}</span>
                        ${h.deskripsi ? `<span class="sr-desc">${h.deskripsi}</span>` : ''}
                    </span>
                    <span class="sr-arrow">→</span>
                </a>
            </li>
        `).join('');
        $list.style.display = 'block';
        items = Array.from($list.querySelectorAll('li'));
    }

    async function doSearch(q) {
        if (q.length < 2) { resetResults(); return; }
        showLoading();
        try {
            const res  = await fetch(`${AJAX_URL}?q=${encodeURIComponent(q)}`, {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            const data = await res.json();
            renderResults(data, q);
        } catch (err) {
            $loading.style.display = 'none';
            $empty.style.display   = 'flex';
            $emptyQ.textContent    = '"' + q + '"';
        }
    }

    function setActive(idx) {
        items.forEach(li => li.classList.remove('active'));
        if (idx >= 0 && idx < items.length) {
            items[idx].classList.add('active');
            items[idx].querySelector('a').scrollIntoView({ block: 'nearest' });
        }
        activeIdx = idx;
    }

    // Buka modal
    $btn.addEventListener('click', openModal);
    document.addEventListener('keydown', e => {
        if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 'k') {
            e.preventDefault();
            openModal();
        }
    });

    // Tutup modal
    $close.addEventListener('click', closeModal);
    $backdrop.addEventListener('click', closeModal);

    // Input pencarian (debounce)
    $input.addEventListener('input', () => {
        clearTimeout(debTimer);
        const q = $input.value.trim();
        debTimer = setTimeout(() => doSearch(q), 280);
    });

    // Klik chip populer
    document.querySelectorAll('.sh-chip').forEach(chip => {
        chip.addEventListener('click', () => {
            $input.value = chip.dataset.q;
            doSearch(chip.dataset.q);
            $input.focus();
        });
    });

    // Navigasi keyboard
    document.addEventListener('keydown', e => {
        if (!$modal.classList.contains('open')) return;

        if (e.key === 'Escape') { closeModal(); return; }

        if (e.key === 'ArrowDown') {
            e.preventDefault();
            if (items.length) setActive(Math.min(activeIdx + 1, items.length - 1));
        }
        if (e.key === 'ArrowUp') {
            e.preventDefault();
            if (items.length) setActive(Math.max(activeIdx - 1, 0));
        }
        if (e.key === 'Enter') {
            if (activeIdx >= 0 && items[activeIdx]) {
                items[activeIdx].querySelector('a').click();
            } else if ($input.value.trim().length >= 2) {
                window.location.href = `${CARI_URL}?q=${encodeURIComponent($input.value.trim())}`;
            }
        }
    });
});
</script>
</body>
</html>
