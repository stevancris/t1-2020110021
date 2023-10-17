<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('landing');
// });


// Route::get('/', [App\Http\Controllers\BookController::class, 'index']);
// Route::post('/', [App\Http\Controllers\BookController::class, 'store']);
Route::resource('books', BookController::class);
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{list}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{list}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::patch('/books/{list}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{list}', [BookController::class, 'destroy'])->name('books.destroy');