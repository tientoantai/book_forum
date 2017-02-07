<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookForum\Book\BookRepository;
use App\Publisher\PublisherRepository;

class BookController extends Controller
{
	protected $publisherRepository;
	protected $bookRepository;

	public function __construct(BookRepository $bookRepository, PublisherRepository $publisherRepository)
	{
		$this->bookRepository      = $bookRepository;
		$this->publisherRepository = $publisherRepository;
	}

	public function index()
	{
		return view('books.index')
				->with('books', $this->bookRepository->all())
		;
	}

	public function admin()
	{
		return view('books.list')
				->with('books', $this->bookRepository->all())
		;
	}

	public function create()
	{
		return view('books.insert')
				->with('books', $this->bookRepository->all())
				->with('publishers', $this->publisherRepository->all())
		;
	}

	public function store(Request $request)
	{
		$this->bookRepository->add($request->get('book'));

		return redirect()->route('books.admin');
	}

	public function edit($id)
	{
		$book = $this->bookRepository->findById($id);

		return view('books.edit')
				->with('book', $book)
				->with('publishers', $this->publisherRepository->all())
		;
	}

	public function update(Request $request)
	{
		$this->bookRepository->update($request->all());

		return redirect()->route('books.show',['id'=>$request->id]);
	}

	public function show($id)
	{
		return view('books.show')
				->with('book', $this->bookRepository->findById($id))
		;
	}

	public function delete($id)
	{
		$book = $this->bookRepository->findById($id);
		$this->bookRepository->delete($book);

		return redirect()->route('books.admin');
	}

	public function search(Request $request)
	{
		return view('books.filter')
	        ->with([
	            'books'      => $this->bookRepository->all(),
	            'publishers' => $this->publisherRepository->all(),
	            'request'    => $request,
   			])
	    ;
	}
}
