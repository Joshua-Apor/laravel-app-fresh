<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('book_registration.index', [
            'books' => Book::all()
        ]);
    }

    public function create()
    {
        return view('book_registration.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required',
            'genre' => 'required',
            'published_year' => 'required|integer',
            'isbn' => 'required|unique:books,isbn',
            'pages' => 'required|integer',
            'language' => 'required',
            'publisher' => 'required',
            'price' => 'required|numeric',
        ]);

        $validated['is_available'] = $request->has('is_available');

        Book::create($validated);

        return redirect('/books')->with('success', 'Book added!');
    }

    public function show(Book $book)
    {
        return view('book_registration.show', [
            'book' => $book
        ]);
    }

    public function edit(Book $book)
    {
        return view('book_registration.edit', [
            'book' => $book
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required',
            'genre' => 'required',
            'published_year' => 'required|integer',
            'isbn' => 'required|unique:books,isbn,' . $book->id,
            'pages' => 'required|integer',
            'language' => 'required',
            'publisher' => 'required',
            'price' => 'required|numeric',
        ]);

        $validated['is_available'] = $request->has('is_available');

        $book->update($validated);

        return redirect('/books/' . $book->id)->with('success', 'Book updated!');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('/books')->with('success', 'Book deleted!');
    }
}