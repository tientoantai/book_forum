<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookForum\Book\Book;
use Illuminate\Support\Facades\Session;


class BookController extends Controller
{
    public function index()
    {
        return view('index')->with('booklist', Book::all());
    }

    public function listBook(){
       // dd(request()->session());
        //dd(Book::all());
        return view('book-list')->with('booklist', Book::all());
    }
    
    public function delete($id)
    {
        $book = Book::where('id', '=', $id)->delete();
        return redirect('/books');
    }
    public function detail($id)
    {
        $book = Book::where('id', '=', $id)->first();
        return view('book-detail')->with('book', $book);
    }
    public function insertform()
    {
        return view('book-insert');
    }
    public  function insert()
    {
        $book = new Book;
        $book->author = request('author');
        $book->price = request('price');
        $book->publisher = request('publisher');
        $book->title = request('title');
        $book->genre = request('genre');
        $book->image = request()->get('image');;
        if($book->image){
            $book->save();
            return redirect('/books');
        }else{
            $book->image = 'uploads/68315530-dc84-11e6-af04-7935bcbd61fd.jpg';
            $book->save();
            return redirect('/books');
        }

    }
    public  function updateform($id)
    {
        $book = Book::where('id', '=', $id)->first();
        return view('book-update')->with('book', $book);
    }
    public function update($id)
    {
        $book = Book::where('id', '=', $id)->first();
        $book->author = request('author');
        $book->price = request('price');
        $book->publisher = request('publisher');
        $book->title = request('title');
        $book->genre = request('genre');
        $book->image = request()->get('image');

        if($book->image){
            $book->save();
            return redirect('/books');
        }else{
            $book->image = 'uploads/68315530-dc84-11e6-af04-7935bcbd61fd.jpg';
            $book->save();
            return redirect('/books');
        }
    }
}
