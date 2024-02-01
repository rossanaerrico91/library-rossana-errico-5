<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookUpdateRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

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
    public function store(BookStoreRequest $book)
    {

        $request = $book->validated();


        $img = ($book->file('image'));

        if($img != null) {

            $image = $book->file('image')->store('images');

            $request = array_merge($request, ['image' => $image]);
        }

        $book = Book::create($request);

        $book->categories()->attach($request['categories']);

        return response()->redirectToRoute('books.index');
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
    public function update(Book $book, BookUpdateRequest $request)
    {

        $validated = $request->validated();

        $img = $request->file('image');

        if($img != null) {

            $image = $request->file('image')->store('images');

            $validated = array_merge($validated, ['image' => $image]);
        }

        $book->update($validated);

        $book->categories()->sync($validated['categories']);

        return response()->redirectToRoute('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->redirectToRoute('books.index');
    }
}
