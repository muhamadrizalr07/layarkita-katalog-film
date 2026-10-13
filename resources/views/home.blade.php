@extends('layouts.app')

@section('title', 'Beranda - LayarKita')

@section('content')

    <section class="page-container pt-4">
        <div style="
            position: relative;
            min-height: 390px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
            background:
                linear-gradient(rgba(12, 26, 58, .35), rgba(12, 26, 58, .88)),
                url('https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?auto=format&fit=crop&w=1800&q=85')
                center/cover;
            color: white;
        ">
            <div style="max-width: 700px; padding: 48px 24px;">
                <p style="font-size: 12px; letter-spacing: 3px; font-weight: 700;">
                    RUANG UNTUK PECINTA FILM
                </p>

                <h1 style="
                    font-family: 'Manrope', sans-serif;
                    font-size: clamp(32px, 5vw, 55px);
                    font-weight: 800;
                    line-height: 1.15;
                    letter-spacing: -2px;
                ">
                    Cerita Hebat,<br>
                    <span style="color: #ffb36b;">Dimulai di Sini.</span>
                </h1>

                <p style="max-width: 520px; margin: 20px auto; color: #e5e7eb; line-height: 1.8;">
                    Temukan film dan serial pilihan, dari petualangan
                    antariksa hingga kisah yang membuatmu berpikir.
                </p>

                <a href="{{ route('film.index') }}" class="btn-accent">
                    JELAJAHI KATALOG &nbsp; →
                </a>
            </div>
        </div>

        <div class="row g-0 bg-white text-center py-4"
             style="border: 1px solid #e8eaf0;">
            <div class="col-4">
                <h3 class="fw-bold mb-1">06</h3>
                <small class="muted">Koleksi pilihan</small>
            </div>

            <div class="col-4" style="border-left: 1px solid #e8eaf0; border-right: 1px solid #e8eaf0;">
                <h3 class="fw-bold mb-1">04+</h3>
                <small class="muted">Genre film</small>
            </div>

            <div class="col-4">
                <h3 class="fw-bold mb-1">01</h3>
                <small class="muted">Tempat menjelajah</small>
            </div>
        </div>
    </section>

    <section class="page-container py-5">
        <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
            <div>
                <p class="eyebrow mb-2">PILIHAN EDITOR</p>
                <h2 class="section-title mb-2">Mulai dari sini.</h2>
                <p class="muted mb-0">
                    Beberapa cerita yang layak masuk daftar tontonanmu.
                </p>
            </div>

            <a href="{{ route('film.index') }}" class="text-link">
                Lihat semua film →
            </a>
        </div>

        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="film-card">
                    <img class="film-poster"
                         src="https://cdn.prod.website-files.com/61947db4da3d1c274b89af16/669c8190628276b68d1be625_INTERSTELLAR-14-2-p-1600.png"
                         alt="Pemandangan luar angkasa">

                    <div class="card-body">
                        <p class="eyebrow mb-2">SCI-FI · 2014</p>
                        <h3>Interstellar</h3>
                        <p class="film-description">
                            Sebuah perjalanan melintasi ruang angkasa
                            demi masa depan umat manusia.
                        </p>
                        <a href="{{ route('film.show', ['slug' => 'interstellar']) }}"
                           class="text-link">Baca cerita →</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="film-card">
                    <img class="film-poster"
                         src="https://mediapijar.com/wp-content/uploads/2018/11/1541608591119blob.png"
                         alt="Langit malam sinematik">

                    <div class="card-body">
                        <p class="eyebrow mb-2">SCI-FI · 2010</p>
                        <h3>Inception</h3>
                        <p class="film-description">
                            Ketika mimpi menjadi tempat berlangsungnya
                            sebuah misi yang berbahaya.
                        </p>
                        <a href="{{ route('film.show', ['slug' => 'inception']) }}"
                           class="text-link">Baca cerita →</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="film-card">
                    <img class="film-poster"
                         src="https://beam-images.warnermediacdn.com/BEAM_LWM_DELIVERABLES/52217243-a137-45d6-9c6a-0dfab4633034/74906de0-d644-4b0d-bf22-e2a321583a93?host=wbd-images.prod-vod.h264.io&partner=beamcom"
                         alt="Pemandangan gelap dan dramatis">

                    <div class="card-body">
                        <p class="eyebrow mb-2">ACTION · 2008</p>
                        <h3>The Dark Knight</h3>
                        <p class="film-description">
                            Pertarungan antara seorang pelindung kota
                            dan musuh yang tak terduga.
                        </p>
                        <a href="{{ route('film.show', ['slug' => 'the-dark-knight']) }}"
                           class="text-link">Baca cerita →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
