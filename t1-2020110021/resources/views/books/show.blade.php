@extends('layouts.template')

@section('title', $book->judul_buku)

@section('content')
    <article class="blog-post my-4">
        <h1 class="display-5 fw-bold">{{ $book->judul_buku }}</h1>
        <p class="blog-post-meta">{{ $book->updated_at }}</p>
        {{-- <p>{{ $book->judul_buku }}</p> --}}
        <p>Total halaman: {{ $book->total_halaman }}</p>
        <p>Kategori: {{ $book->kategori }}</p>
        <p>Penerbit: {{ $book->penerbit }}</p>
    </article>
@endsection