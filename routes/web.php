<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/film', [FilmController::class, 'index'])
    ->name('film.index');

Route::get('/film/{slug}', [FilmController::class, 'show'])
    ->name('film.show');