<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        dump($validated);

    }
}
