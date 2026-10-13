@extends('layouts.app')

@section('title', $film['judul'] . ' - LayarKita')

@section('content')
    <section class="page-container py-5">

        <div class="mb-4">
            <a href="{{ route('film.index') }}" class="text-link">
                ← Kembali ke katalog
            </a>
        </div>

        <div class="row g-5 align-items-start">

            <div class="col-12 col-md-5 col-lg-4">
                <img
                    src="{{ asset($film['poster']) }}"
                    alt="Poster {{ $film['judul'] }}"
                    style="
                        display: block;
                        width: 100%;
                        max-height: 560px;
                        object-fit: cover;
                        background: #e5e7eb;
                        border: 1px solid #e1e5ec;
                    "
                >
            </div>

            <div class="col-12 col-md-7 col-lg-8">

                <p class="eyebrow mb-3">DETAIL FILM & SERIAL</p>

                <h1 style="
                    font-family: 'Manrope', sans-serif;
                    font-size: clamp(32px, 5vw, 52px);
                    font-weight: 800;
                    letter-spacing: -1.8px;
                    line-height: 1.15;
                ">
                    {{ $film['judul'] }}
                </h1>

                <div class="d-flex flex-wrap gap-2 align-items-center my-4">
                    <span class="badge rounded-0 text-bg-primary">
                        {{ $film['tahun'] }}
                    </span>

                    <span style="color: #737b8c;">
                        {{ $film['genre'] }}
                    </span>
                </div>

                <div style="
                    width: 60px;
                    height: 4px;
                    background: #f28b38;
                    margin-bottom: 25px;
                "></div>

                <h2 style="font-size: 21px; font-weight: 800;">
                    Tentang cerita
                </h2>

                <p style="
                    max-width: 650px;
                    color: #596274;
                    font-size: 16px;
                    line-height: 1.9;
                ">
                    {{ $film['deskripsi'] }}
                </p>

                <div class="mt-5 pt-4"
                     style="border-top: 1px solid #dfe3eb;">
                    <p class="muted small mb-1">Koleksi</p>
                    <p class="fw-bold">LayarKita — Katalog Film & Serial</p>

                    <a href="{{ route('film.index') }}" class="btn-accent mt-2">
                        Kembali ke semua film
                    </a>
                </div>

            </div>
        </div>

    </section>
@endsection