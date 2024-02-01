<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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

Route::get('/', function () {
    return view('welcome');
});

//guest
Route::get('/books', [BookController::class,'index'])->name('books.index');
Route::get('/books/{book}/dettagli', [BookController::class,'show'])->name('books.show');

//auth
Route::get('/books/crea', [BookController::class,'create'])->name('books.create')->middleware('auth');
Route::post('/books/salva', [BookController::class,'store'])->name('books.store')->middleware('auth');
Route::get('/books/{book}/modifica', [BookController::class,'edit'])->name('books.edit')->middleware('auth');
Route::patch('/books/{book}/aggiorna', [BookController::class,'update'])->name('books.update')->middleware('auth');
Route::delete('/books/{book}', [BookController::class,'destroy'])->name('books.destroy')->middleware('auth');


Route::resource('authors', AuthorController::class);

Route::get('/articles', [ArticleController::class,'index'])->name('articles.index')->middleware('auth');
Route::get('/articles/create', [ArticleController::class,'create'])->name('articles.create')->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
