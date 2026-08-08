<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin – Pantai Liang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@600&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Nunito Sans', sans-serif;
            background: linear-gradient(160deg, #e8f4fd, #cce9f9);
            min-height: 100vh; display: flex; align-items: center; justify-content: center;
            color: #1c3a4a; padding: 1.5rem;
        }
        .box { background: #fff; border-radius: 20px; padding: 2.2rem 2rem; width: 100%; max-width: 380px; box-shadow: 0 20px 50px rgba(15,122,154,0.15); }
        h1 { font-family: 'Fraunces', serif; font-size: 1.4rem; text-align: center; color: #0f7a9a; margin-bottom: 0.3rem; }
        p.sub { text-align: center; color: #7ba8ba; font-size: 0.85rem; margin-bottom: 1.6rem; }
        label { display: block; font-size: 0.82rem; font-weight: 600; margin-bottom: 0.35rem; color: #2e5468; }
        .field { margin-bottom: 1rem; }
        input { width: 100%; padding: 0.65rem 0.8rem; border-radius: 10px; border: 1px solid rgba(26,155,191,0.2); font-family: inherit; font-size: 0.92rem; }
        input:focus { outline: none; border-color: #1a9bbf; }
        .err { color: #d9534f; font-size: 0.8rem; margin-top: 1rem; text-align: center; }
        button { width: 100%; margin-top: 0.6rem; padding: 0.75rem; border: none; border-radius: 10px; background: #1a9bbf; color: #fff; font-weight: 700; font-size: 0.94rem; cursor: pointer; font-family: inherit; }
        button:hover { background: #0f7a9a; }
        .remember { display: flex; align-items: center; gap: 0.5rem; font-size: 0.85rem; color: #4a7a90; margin-bottom: 1rem; }
        .remember input { width: auto; }
    </style>
</head>
<body>
    <div class="box">
        <h1>Panel Admin</h1>
        <p class="sub">Pantai Liang (Hunimua)</p>

        <form method="POST" action="{{ route('admin.login.store') }}">
            @csrf
            <div class="field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <label class="remember">
                <input type="checkbox" name="remember"> Ingat saya
            </label>
            <button type="submit">Masuk</button>

            @if ($errors->any())
                <div class="err">{{ $errors->first() }}</div>
            @endif
        </form>
    </div>
</body>
</html>
