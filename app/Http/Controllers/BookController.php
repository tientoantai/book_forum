<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookForum\Book\Book;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    public function listBook(){
       // dd(request()->session());
        //dd(Book::all());
        return view('listbook')->with('booklist', Book::all());
    }
    public function listbookhome()
    {
        return view('home')->with('booklist', Book::all());
    }
    public function delete($id)
    {
        $book = Book::where('id', '=', $id)->delete();
        return redirect('/books');
    }
    public function detail($id)
    {
        $book = Book::where('id', '=', $id)->first();
        return view('detail')->with('book', $book);
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
        if($book->image){
            $book->save();
            return redirect('/books');
        }else{
            $book->image = 'https://www.pinterest.com/pin/391742867571469416/';
            $book->save();
            return redirect('/books');
        }

    }
    public  function updateform($id)
    {
        $book = Book::where('id', '=', $id)->first();
        return view('update')->with('book', $book);
    }
    public function update($id)
    {
        $book = Book::where('id', '=', $id)->first();
        //dd($book);
        $book->author = request('author');
        $book->price = request('price');
        $book->publisher = request('publisher');
        $book->title = request('title');
        $book->image = request('image');


        if($book->image){
            $book->save();
            return redirect('/books');
        }else{
            $book->image = 'https://www.pinterest.com/pin/391742867571469416/';
            $book->save();
            return redirect('/books');
        }
    }
}
