<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('dashboard')->with([
            'books' => $books
        ]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return to_route('dashboard');
    }

    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return to_route('dashboard');
    }

    public function edit(Book $book)
    {
        return view('books.edit')->with([
            'book' => $book
        ]);
    }

    public function update(Book $book, Request $request)
    {
        $book->fill($request->all())->save();
        return to_route('dashboard');
    }

    public function show(Book $book)
    {
        return view('books.show')->with([
            'book' => $book
        ]);
    }
}
