<?php

namespace App\Http\Controllers;

use App\BookForum\PublisherService\Publisher;
use Illuminate\Http\Request;
use App\BookForum\Book\Book;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{

    public function listBook(){
        return view('books.listbook')->with('booklist', Book::all());
    }
    public function listbookhome()
    {
        return view('books.home')->with('booklist', Book::all());
    }
    public function delete($id)
    {
        Book::where('id', '=', $id)->delete();
//        return redirect('/books');
    }
    public function detail($id)
    {
        $book = Book::where('id', '=', $id)->first();
        return view('books.detailBook')->with('book', $book);
    }
    public function insertform()
    {
        $publishers = Publisher::all();
        return view('books.insertBook')
            ->with('publishers', $publishers);

    }
    public function insert(Book $book)
    {
        $book->save();
        return redirect('/books');
    }
    public  function updateform($id)
    {
        $book = Book::where('id', '=', $id)->first();
        $publishers = Publisher::all();
        return view('books.updateBook')
            ->with('book', $book)
            ->with('publishers', $publishers);

    }

    /**
     * @param Book $book
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Book $book)
    {
        $book->save();
        return redirect('/detail/'.$book->id);
    }
}
