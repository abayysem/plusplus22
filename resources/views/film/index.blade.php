
@extends('layouts.app')

@section('title', 'Daftar Film - Plusplus22')

@section('content')
<div class="container">
    <h1>Koleksi Film & Serial</h1>

    <p class="muted">
        Jelajahi koleksi film dan serial pilihan CineList.
    </p>

    <div class="grid">
        @foreach ($films as $film)
            <article class="card">
                <img
                    src="{{ asset('img/' . $film['poster']) }}"
                    alt="Poster {{ $film['judul'] }}"
                     style="width: 60%; height: 350px; object-fit: cover; display: block; margin: 0 auto;">

                <div class="content">
                    <p class="brandjenis">{{ $film['jenis'] }}</p>

                    <h3>{{ $film['judul'] }}</h3>

                    <p class="muted">
                        {{ $film['genre'] }} · {{ $film['tahun'] }}
                    </p>

                    <a href="{{ route('film.show', $film['slug']) }}" class="btn">
                        Lihat Detail
                    </a>
                </div>
            </article>
        @endforeach
    </div>
</div>
@endsection
