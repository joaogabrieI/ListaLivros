<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::all();
        $sucessMessage = $request->session()->get('sucess.message');
        return view('dashboard')->with([
            'books' => $books,
            'sucessMessage' => $sucessMessage
        ]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'author' => 'required',
            'pages' => 'required'
        ]);

        Book::create($request->all());
        return to_route('dashboard')->with([
            'sucess.message' => "O livro '{$request->name}' foi adicionado com sucesso!",
        ]);
    }

    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return to_route('dashboard')->with([
            'sucess.message' => "O livro '{$book->name}' foi removido com sucesso!",
        ]);
    }

    public function edit(Book $book)
    {
        return view('books.edit')->with([
            'book' => $book
        ]);
    }

    public function update(Book $book, Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'description' => 'required',
            'author' => 'required',
            'pages' => 'required'
        ]);

        $book->fill($request->all())->save();
        return to_route('dashboard')->with([
            'sucess.message' => "O livro '{$book->name}' foi alterado com sucesso!",
        ]);
    }

    public function show(Book $book)
    {
        return view('books.show')->with([
            'book' => $book
        ]);
    }
}
