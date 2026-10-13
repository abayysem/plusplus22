
@extends('layouts.app')

@section('title', $film['judul'] . ' - Plusplus22')

@section('content')
<div class="container">
    <div class="detail">
        <div>
            <img
                src="{{ asset('img/' . $film['poster']) }}"
                alt="Poster {{ $film['judul'] }}"
                style="width: 300px; height: 400px; object-fit: cover;">
        </div>

        <div>
            <p class="brandjenis">{{ $film['jenis'] }}</p>

            <h1 class="brandjenis">{{ $film['judul'] }}</h1>

            <p class="muted">
                Genre: {{ $film['genre'] }}
            </p>

            <p class="muted">
                Tahun rilis: {{ $film['tahun'] }}
            </p>

            <h3>Sinopsis</h3>

            <p class="muted">
                {{ $film['deskripsi'] }}
            </p>

            <a href="{{ route('film.index') }}" class="btn">
                &larr; Kembali ke Koleksi
            </a>
        </div>
    </div>
</div>
@endsection
