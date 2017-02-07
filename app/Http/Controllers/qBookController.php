<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookForum\Book\Book;
use Illuminate\Support\Facades\Session;
use App\Publisher\PublisherRepository;

class BookController extends Controller
{
    protected $publisherRepository;

    public function __construct(PublisherRepository $publisherRepository)
    {
        $this->publisherRepository = $publisherRepository;
    }

    public function listBook(){

        return view('books.listbook')
                ->with('booklist', Book::all())
                ;
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
        return view('books.insertBook') 
                ->with('publishers', $this->publisherRepository->all())
        ;
    }
    public function insert(Book $book)
    {
        $book->save();
        return redirect('/books');
    }
    public  function updateform($id)
    {
        $book = Book::where('id', '=', $id)->first();
        return view('books.updateBook')->with('book', $book);
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
