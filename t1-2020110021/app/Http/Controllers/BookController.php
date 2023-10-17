<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(10);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_isbn' => 'required|numeric|digits:13',
            'judul_buku' => 'required|string|min:3|max:255',
            'total_halaman' => 'required|integer',
            'kategori' => 'required|string',
            'penerbit' => 'required|string|min:3|max:255',
        ]);
        // dump($validated);

        $book = Book::create([
           'no_isbn' => $validated['no_isbn'],
           'judul_buku' => $validated['judul_buku'],
           'total_halaman' => $validated['total_halaman'],
           'kategori' => $validated['kategori'],
           'penerbit' => $validated['penerbit'], 
        ]);

        return redirect()->route('books.index')->with('success', 'Book added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'no_isbn' => 'required|numeric|digits:13',
            'judul_buku' => 'required|string|min:3|max:255',
            'total_halaman' => 'required|integer',
            'kategori' => 'required|string',
            'penerbit' => 'required|string|min:3|max:255',
        ]);

         // Update book
        $book->update([
            'no_isbn' => $validated['no_isbn'],
            'judul_buku' => $validated['judul_buku'],
            'total_halaman' => $validated['total_halaman'],
            'kategori' => $validated['kategori'],
            'penerbit' => $validated['penerbit'],
        ]);
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted sucessfully.');
    }
}
