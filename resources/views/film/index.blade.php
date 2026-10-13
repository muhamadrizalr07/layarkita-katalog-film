@extends('layouts.app')

@section('title', 'Katalog Film - LayarKita')

@section('content')
    <section class="page-container py-5">

        <div class="mb-5">
            <p class="eyebrow mb-2">JELAJAHI KOLEKSI</p>

            <h1 class="section-title mb-3">
                Semua cerita, satu layar.
            </h1>

            <p class="muted" style="max-width: 600px; line-height: 1.8;">
                Kumpulan film dan serial pilihan untuk menemani waktu luangmu.
                Pilih judul untuk membaca informasi selengkapnya.
            </p>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4 pb-3"
             style="border-bottom: 1px solid #dfe3eb;">
            <span class="fw-bold">Koleksi film & serial</span>
            <span class="muted small">{{ count($films) }} judul</span>
        </div>

        <div class="row g-4">
            @foreach ($films as $film)
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="film-card">
                        <a href="{{ route('film.show', ['slug' => $film['slug']]) }}"
                           class="text-decoration-none">
                            <img
                                class="film-poster"
                                src="{{ asset($film['poster']) }}"
                                alt="Poster {{ $film['judul'] }}"
                                loading="lazy"
                            >
                        </a>

                        <div class="card-body">
                            <p class="eyebrow mb-2">
                                {{ $film['genre'] }} · {{ $film['tahun'] }}
                            </p>

                            <h3>{{ $film['judul'] }}</h3>

                            <p class="film-description mb-3">
                                {{ \Illuminate\Support\Str::limit($film['deskripsi'], 110) }}
                            </p>

                            <a
                                href="{{ route('film.show', ['slug' => $film['slug']]) }}"
                                class="text-link"
                            >
                                Lihat detail →
                            </a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>

        <div class="mt-5 pt-4" style="border-top: 1px solid #dfe3eb;">
            <a href="{{ route('home') }}" class="text-link">
                ← Kembali ke beranda
            </a>
        </div>

    </section>
@endsection