@extends('layouts.template')

@section('title', 'Add New Book')

@section('content')
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>List of Books</h1>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success mt-4">
        {{ session()->get('success') }}
    </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row my-5">
        <div class="col-6">
            <form action="{{route('books.store')}}" method="POST">
                @csrf
                <div class="mb-3 col-md-8 col-sm-12">
                    <label for="no_isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control" name="no_isbn" value="{{ old('no_isbn') }}">
                </div>
                <div class="mb-3 col-md-8 col-sm-12">
                    <label for="judul_buku" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" name="judul_buku" value="{{ old('judul_buku') }}">
                </div>
                <div class="mb-3 col-md-8 col-sm-12">
                    <label for="total_halaman" class="form-label">Total Halaman</label>
                    <input type="text" class="form-control" name="total_halaman" value="{{ old('total_halaman') }}">
                </div>
                <div class="mb-3 col-md-8 col-sm-12">
                    <label for="kategori" class="form-label">Kategori Buku</label>
                    <select type="text" class="form-control" name="kategori" value="{{ old('kategori') }}">
                        <option value="uncategorized">Uncategorized</option>
                        <option value="sci-fi">Science Fiction</option>
                        <option value="novel">Novel</option>
                        <option value="history">History</option>
                        <option value="biography">Biography</option>
                        <option value="romance">Romance</option>
                        <option value="education">Education</option>
                        <option value="culinary">Culinary</option>
                        <option value="comic">Comic</option>
                    </select>
                </div>
                <div class="mb-3 col-md-8 col-sm-12">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" value="{{ old('penerbit') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection