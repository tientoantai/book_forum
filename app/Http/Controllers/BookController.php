<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function listBook(){
        return view('book')->with('booklist', Book::all());
    }
    public function delete($id)
    {
        $book = Book::where('id', '=', $id)->delete();
        return redirect('/books')
    }
    public function detail($id)
    {
        $book = Book::where('id', '=', $id);
        return view('detailbook')->with('book', $book);
    }
    public function insertform()
    {
        return view('insert');
    }
    public  function insert()
    {
        $book = new Book;
        $book->author = request('author');
        $book->price = request('price');
        $book->publisher = request('publisher');
        $book->title = request('title');
        $book->image = request('image');
        $book->save();
        return redirect('/books');

    }
    public  function updateform($id)
    {
        $book = Book:where('id', '=', $id);
        return view('updatebook')->with('book', $book);
    }
    public function update($id)
    {
        $book = Book::where('id', '=', $id);
        $book->author = request('author');
        $book->price = request('price');
        $book->publisher = request('publisher');
        $book->title = request('title');
        $book->image = request('image');
        $book->save();
        return redirect('/books');
    }
}
