<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') – Panel Admin Pantai Liang</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@500;600&family=Nunito+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --sky: #e8f4fd; --ocean: #1a9bbf; --ocean-deep: #0f7a9a; --ocean-dark: #0d5f78;
            --teal: #2dbfb8; --sand: #f9f3e8; --sand-dark: #e8d9c0; --gold: #f5c842;
            --white: #ffffff; --ink: #1c3a4a; --ink-soft: #2e5468; --text-mid: #4a7a90;
            --text-muted: #7ba8ba; --border: rgba(26,155,191,0.15); --danger: #d9534f;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Nunito Sans', sans-serif;
            background: var(--sky);
            color: var(--ink);
            min-height: 100vh;
            display: flex;
        }
        a { color: inherit; text-decoration: none; }

        /* Sidebar */
        .sidebar {
            width: 240px; flex-shrink: 0; background: var(--ocean-dark);
            color: var(--white); min-height: 100vh; padding: 1.6rem 1.2rem;
            display: flex; flex-direction: column; gap: 0.3rem;
        }
        .sidebar .brand {
            font-family: 'Fraunces', serif; font-size: 1.2rem; font-weight: 600;
            margin-bottom: 1.6rem; line-height: 1.3;
        }
        .sidebar .brand small { display: block; font-family: 'Nunito Sans', sans-serif; font-size: 0.7rem; opacity: 0.7; font-weight: 400; letter-spacing: 0.05em; }
        .sidebar nav a {
            display: flex; align-items: center; gap: 0.6rem;
            padding: 0.65rem 0.8rem; border-radius: 10px; font-size: 0.92rem; font-weight: 500;
            color: rgba(255,255,255,0.82); margin-bottom: 0.15rem; transition: background 0.15s;
        }
        .sidebar nav a:hover { background: rgba(255,255,255,0.08); }
        .sidebar nav a.active { background: var(--teal); color: var(--white); }
        .sidebar .logout-form { margin-top: auto; }
        .sidebar .logout-btn {
            width: 100%; padding: 0.65rem 0.8rem; border-radius: 10px; border: 1px solid rgba(255,255,255,0.25);
            background: transparent; color: rgba(255,255,255,0.85); font-family: inherit; font-size: 0.88rem;
            font-weight: 500; cursor: pointer;
        }
        .sidebar .logout-btn:hover { background: rgba(255,255,255,0.08); }

        /* Main */
        .main { flex: 1; padding: 2rem 2.4rem; max-width: 1100px; }
        .page-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.6rem; flex-wrap: wrap; gap: 0.8rem; }
        .page-header h1 { font-family: 'Fraunces', serif; font-size: 1.6rem; color: var(--ocean-dark); }
        .page-header p { color: var(--text-mid); font-size: 0.9rem; margin-top: 0.2rem; }

        .btn {
            display: inline-flex; align-items: center; gap: 0.4rem; padding: 0.6rem 1.1rem;
            border-radius: 10px; font-weight: 600; font-size: 0.88rem; border: none; cursor: pointer;
            font-family: inherit;
        }
        .btn-primary { background: var(--ocean); color: var(--white); }
        .btn-primary:hover { background: var(--ocean-deep); }
        .btn-secondary { background: var(--white); color: var(--ocean-dark); border: 1px solid var(--border); }
        .btn-secondary:hover { background: var(--sand); }
        .btn-danger { background: #fdecea; color: var(--danger); }
        .btn-danger:hover { background: #f9d4d1; }
        .btn-sm { padding: 0.4rem 0.75rem; font-size: 0.8rem; }

        .card { background: var(--white); border-radius: 16px; border: 1px solid var(--border); padding: 1.4rem; margin-bottom: 1.2rem; }

        .alert { padding: 0.85rem 1.1rem; border-radius: 10px; font-size: 0.9rem; margin-bottom: 1.2rem; font-weight: 500; }
        .alert-sukses { background: #e3f6ec; color: #1f7a4d; }
        .alert-error { background: #fdecea; color: var(--danger); }

        table { width: 100%; border-collapse: collapse; font-size: 0.88rem; }
        thead th { text-align: left; padding: 0.7rem 0.8rem; color: var(--text-mid); font-weight: 600; font-size: 0.76rem; text-transform: uppercase; letter-spacing: 0.04em; border-bottom: 2px solid var(--sand-dark); }
        tbody td { padding: 0.8rem; border-bottom: 1px solid var(--border); vertical-align: middle; }
        tbody tr:hover { background: var(--sand); }
        .thumb { width: 52px; height: 52px; border-radius: 8px; object-fit: cover; display: block; }
        .badge { display: inline-block; padding: 0.2rem 0.6rem; border-radius: 999px; font-size: 0.72rem; font-weight: 600; }
        .badge-on { background: #e3f6ec; color: #1f7a4d; }
        .badge-off { background: #f1f1f1; color: #888; }
        .actions { display: flex; gap: 0.4rem; }
        .empty { text-align: center; padding: 2.5rem 1rem; color: var(--text-muted); }

        /* Forms */
        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
        .form-grid .full { grid-column: 1 / -1; }
        label { display: block; font-size: 0.82rem; font-weight: 600; color: var(--ink-soft); margin-bottom: 0.35rem; }
        input[type=text], input[type=number], input[type=email], input[type=password], input[type=file], select, textarea {
            width: 100%; padding: 0.6rem 0.75rem; border-radius: 8px; border: 1px solid var(--border);
            font-family: inherit; font-size: 0.9rem; color: var(--ink); background: var(--white);
        }
        textarea { resize: vertical; min-height: 80px; }
        input:focus, select:focus, textarea:focus { outline: none; border-color: var(--ocean); }
        .field { margin-bottom: 1rem; }
        .field .err { color: var(--danger); font-size: 0.78rem; margin-top: 0.3rem; }
        .checkbox-row { display: flex; align-items: center; gap: 0.5rem; }
        .checkbox-row input { width: auto; }
        .stat-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 1rem; margin-bottom: 1.6rem; }
        .stat-card { background: var(--white); border: 1px solid var(--border); border-radius: 16px; padding: 1.2rem; }
        .stat-card .num { font-family: 'Fraunces', serif; font-size: 1.8rem; color: var(--ocean-dark); }
        .stat-card .lbl { font-size: 0.8rem; color: var(--text-mid); margin-top: 0.2rem; }

        /* === Fix pagination Previous/Next === */
        .main nav[role="navigation"] > div:first-child { display: none; }
        .main nav[role="navigation"] svg { width: 16px !important; height: 16px !important; display: inline-block; vertical-align: middle; }
        .main nav[role="navigation"] .flex, .main nav[role="navigation"] ul { display: flex; align-items: center; flex-wrap: wrap; gap: 0.3rem; list-style: none; margin: 0; padding: 0; }
        .main nav[role="navigation"] a, .main nav[role="navigation"] span[aria-current] span, .main nav[role="navigation"] span[aria-disabled] span { display: inline-flex; align-items: center; justify-content: center; min-width: 36px; height: 36px; padding: 0 0.6rem; font-size: 0.85rem; font-weight: 600; color: var(--ink-soft); background: var(--white); border: 1px solid var(--border); border-radius: 8px; text-decoration: none; }
        .main nav[role="navigation"] a:hover { background: var(--sand); color: var(--ocean-dark); }
        .main nav[role="navigation"] span[aria-current] span { background: var(--ocean); color: var(--white); border-color: var(--ocean); }
        .main nav[role="navigation"] span[aria-disabled] span { opacity: 0.4; cursor: default; }
        .main nav[role="navigation"] p { font-size: 0.82rem; color: var(--text-mid); margin: 0.5rem 0; }

        /* =========================================
           ── RESPONSIVE & MOBILE FRIENDLY ──
        ========================================= */
        @media (max-width: 768px) {
            body { flex-direction: column; }

            /* Menyulap Sidebar menjadi menu horizontal yang bisa di-scroll / swipe */
            .sidebar {
                width: 100%;
                min-height: auto;
                flex-direction: row;
                overflow-x: auto;
                align-items: center;
                padding: 0.8rem 1rem;
                -webkit-overflow-scrolling: touch; /* Efek geser halus di iOS */
            }

            /* Menyembunyikan scrollbar bawaan browser agar menu terlihat rapi */
            .sidebar::-webkit-scrollbar { display: none; }
            .sidebar { scrollbar-width: none; -ms-overflow-style: none; }

            .sidebar .brand { display: none; }

            /* Merapikan link navigasi agar tidak turun ke bawah */
            .sidebar nav { display: flex; gap: 0.4rem; }
            .sidebar nav a {
                white-space: nowrap;
                padding: 0.5rem 0.8rem;
                font-size: 0.85rem;
                margin-bottom: 0;
            }

            /* Tombol logout dibuat senada dengan link navigasi */
            .sidebar .logout-form { margin-top: 0; margin-left: 0.5rem; }
            .sidebar .logout-btn {
                width: auto;
                white-space: nowrap;
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
            }

            /* Area konten utama dan grid */
            .main { padding: 1.2rem; }
            .form-grid { grid-template-columns: 1fr; }

            /* Memastikan semua kotak (termasuk card yang berisi tabel) bisa di-scroll horizontal */
            /* Ini akan menyelamatkan tabel-tabel data di HP agar tata letaknya tidak hancur */
            .card { overflow-x: auto; -webkit-overflow-scrolling: touch; }
            table { min-width: 600px; }

            .page-header h1 { font-size: 1.4rem; }
        }
    </style>

    @stack('styles')
</head>
<body>

    <aside class="sidebar">
        <div class="brand">Pantai Liang<small>PANEL ADMIN</small></div>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">🏠 Dashboard</a>
            <a href="{{ route('admin.galeri.index') }}" class="{{ request()->routeIs('admin.galeri.*') ? 'active' : '' }}">🖼️ Galeri</a>
            <a href="{{ route('admin.ulasan.index') }}" class="{{ request()->routeIs('admin.ulasan.*') ? 'active' : '' }}">⭐ Ulasan</a>
            <a href="{{ route('admin.fasilitas.index') }}" class="{{ request()->routeIs('admin.fasilitas.*') ? 'active' : '' }}">🏖️ Fasilitas</a>
            <a href="{{ route('admin.tiket.index') }}" class="{{ request()->routeIs('admin.tiket.*') ? 'active' : '' }}">🎟️ Tiket</a>
            <a href="{{ route('profil') }}" target="_blank">🔗 Lihat Situs</a>
        </nav>
        <form action="{{ route('admin.logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="logout-btn">Keluar</button>
        </form>
    </aside>

    <main class="main">
        @if (session('sukses'))
            <div class="alert alert-sukses">{{ session('sukses') }}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-error">
                @foreach ($errors->all() as $error)
                    {{ $error }}@if(!$loop->last)<br>@endif
                @endforeach
            </div>
        @endif

        @yield('content')
    </main>

</body>
</html>
