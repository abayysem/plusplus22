
@extends('layouts.app')

@section('title', 'Beranda - Plusplus22')

@section('content')
<div class="container">
    <section class="hero">
        <p class="brand">YOUR MOVIE COLLECTION</p>

        <h1>Temukan Cerita Favoritmu.</h1>

        <p class="mutedhome">
            Selamat datang di CineList, katalog film dan serial
            pilihan untuk menjelajahi berbagai cerita, genre,
            dan dunia sinema.
        </p>

        <a href="{{ route('film.index') }}" class="btn">
            Jelajahi Koleksi
        </a>
    </section>

    <section style="margin-top: 35px;">
        <h2>Selamat Menonton!</h2>
        <p class="muted">
            Temukan rekomendasi film dan serial yang menarik
            untuk menemani waktu luangmu.
        </p>
    </section>
</div>
@endsection
