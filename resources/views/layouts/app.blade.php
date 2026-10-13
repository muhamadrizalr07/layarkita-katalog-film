<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LayarKita')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --navy: #101b3c;
            --blue: #1746a2;
            --orange: #f28b38;
            --paper: #f7f8fa;
            --muted: #737b8c;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--paper);
            color: var(--navy);
            font-family: 'DM Sans', sans-serif;
        }

        h1, h2, h3, h4, .navbar-brand {
            font-family: 'Manrope', sans-serif;
        }

        .navbar {
            min-height: 76px;
            background: #fff;
            border-bottom: 1px solid #e8eaf0;
        }

        .navbar-brand {
            color: var(--navy) !important;
            font-size: 25px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .brand-dot {
            color: var(--orange);
        }

        .nav-link {
            color: #50596b !important;
            font-size: 14px;
            font-weight: 600;
            margin-left: 22px;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--blue) !important;
        }

        .page-container {
            max-width: 1200px;
            margin: auto;
            padding-left: 24px;
            padding-right: 24px;
        }

        .eyebrow {
            color: var(--blue);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .section-title {
            font-size: clamp(28px, 4vw, 42px);
            font-weight: 800;
            letter-spacing: -1.5px;
        }

        .muted {
            color: var(--muted);
        }

        .btn-accent {
            display: inline-block;
            padding: 12px 22px;
            background: var(--orange);
            color: white;
            border: none;
            border-radius: 3px;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            transition: background .2s ease;
        }

        .btn-accent:hover {
            background: #dc7020;
            color: white;
        }

        .film-card {
            height: 100%;
            overflow: hidden;
            background: #fff;
            border: 1px solid #e8eaf0;
            border-radius: 4px;
            transition: transform .2s ease;
        }

        .film-card:hover {
            transform: translateY(-3px);
        }

        .film-poster {
        width: 100%;
        height: 333px;
        object-fit: contain;
        display: block;
        background: #f1f1f1;
}

        .film-card .card-body {
            padding: 18px;
        }

        .film-card h3 {
            font-size: 17px;
            font-weight: 800;
        }

        .film-meta {
            color: var(--muted);
            font-size: 12px;
        }

        .film-description {
            color: #596274;
            font-size: 13px;
            line-height: 1.7;
        }

        .text-link {
            color: var(--blue);
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
        }

        .text-link:hover {
            color: var(--orange);
        }

        footer {
            margin-top: 70px;
            padding: 28px 0;
            background: #fff;
            border-top: 1px solid #e8eaf0;
            color: var(--muted);
            font-size: 13px;
        }

        @media (max-width: 576px) {
            .navbar {
                padding: 12px 0;
            }

            .nav-link {
                margin-left: 0;
                margin-right: 14px;
            }

            .film-poster {
                height: 280px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand">
        <div class="page-container w-100 d-flex align-items-center justify-content-between">
            <a class="navbar-brand" href="{{ route('home') }}">
                LAYAR<span class="brand-dot">.</span>KITA
            </a>

            <div class="navbar-nav flex-row">
                <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                <a class="nav-link" href="{{ route('film.index') }}">Katalog Film</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="page-container d-flex flex-wrap justify-content-between gap-2">
            <span><strong>LAYAR.KITA</strong> — Cerita untuk semua.</span>
            <span>© {{ date('Y') }} LayarKita</span>
        </div>
    </footer>
</body>
</html>