<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    private $films = [
        [
            'slug' => 'interstellar',
            'judul' => 'Interstellar',
            'genre' => 'Sci-Fi, Drama',
            'tahun' => 2014,
            'deskripsi' => 'Perjalanan sekelompok penjelajah yang melintasi ruang angkasa untuk mencari planet baru demi kelangsungan hidup manusia.',
            'poster' => 'images/films/interstellar.jpg',
        ],
        [
            'slug' => 'inception',
            'judul' => 'Inception',
            'genre' => 'Sci-Fi, Thriller',
            'tahun' => 2010,
            'deskripsi' => 'Seorang pencuri profesional memasuki mimpi orang lain untuk mencuri informasi dan menjalankan misi yang berbahaya.',
            'poster' => 'images/films/inception.jpg',
        ],
        [
            'slug' => 'the-dark-knight',
            'judul' => 'The Dark Knight',
            'genre' => 'Action, Crime',
            'tahun' => 2008,
            'deskripsi' => 'Batman menghadapi Joker, penjahat yang menguji batas moral dan ketahanan kota Gotham.',
            'poster' => 'images/films/thedarknight.jpg',
        ],
        [
            'slug' => 'avengers-endgame',
            'judul' => 'Avengers: Endgame',
            'genre' => 'Action, Sci-Fi',
            'tahun' => 2019,
            'deskripsi' => 'Para Avengers berusaha memulihkan alam semesta setelah peristiwa besar yang mengubah kehidupan mereka.',
            'poster' => 'images/films/avengersendgame.jpg',
        ],
        [
            'slug' => 'breaking-bad',
            'judul' => 'Breaking Bad',
            'genre' => 'Crime, Drama',
            'tahun' => 2008,
            'deskripsi' => 'Seorang guru kimia yang menghadapi masalah hidup terlibat dalam dunia produksi narkoba.',
            'poster' => 'images/films/breakingbad.jpg',
        ],
        [
            'slug' => 'stranger-things',
            'judul' => 'Stranger Things',
            'genre' => 'Sci-Fi, Horror',
            'tahun' => 2016,
            'deskripsi' => 'Sekelompok anak menghadapi kejadian misterius dan kekuatan supernatural di kota kecil mereka.',
            'poster' => 'images/films/strangerthings.jpg',
        ],
    ];

    public function index()
    {
        return view('film.index', [
            'films' => $this->films,
        ]);
    }

    public function show($slug)
    {
        $film = collect($this->films)->firstWhere('slug', $slug);

        if (!$film) {
            abort(404);
        }

        return view('film.show', [
            'film' => $film,
        ]);
    }
}