<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Book;

class BookController extends Controller
{
    public function index(){
        return view('book');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'no_isbn' => 'required|numeric|digits:13',
            'judul_buku' => 'required|string|min:3|max:255',
            'total_halaman' => 'required|integer',
            'penerbit' => 'required|string|min:3|max:255',
        ]);
        // dump($validated);

        $book = Book::create([
           'no_isbn' => $validated['no_isbn'],
           'judul_buku' => $validated['judul_buku'],
           'total_halaman' => $validated['total_halaman'],
           'penerbit' => $validated['penerbit'], 
        ]);

        return $book;

    }
}
