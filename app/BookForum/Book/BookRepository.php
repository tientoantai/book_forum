<?php

namespace App\BookForum\Book;
use App\Publisher\PublisherRepository;

class BookRepository
{
	protected $bookFactory;
	protected $publisherRepository;

	public function __construct(BookFactory $bookFactory, PublisherRepository $publisherRepository)
	{
		$this->bookFactory         = $bookFactory;
		$this->publisherRepository = $publisherRepository;
	}

	public function all()
	{
		$bookCollection = 
			\DB::table('books')
				->join('publishers', 'books.publisherID', 'publishers.id')
				->select('books.*')
				->whereNull('books.deleted_at')
				->get()
		;
		
		$books;
		foreach ($bookCollection as $key => $value) {
			$books[$key] = $this->bookFactory->factoryFromCollection($value);
		}
		
		return $books;
	}

	public function add(Book $book)
	{
		return
			\DB::table('books')
				->insert([
					'title' 	 => $book->getTitle(),
					'price'      => $book->getPrice(),
					'author'	 => $book->getAuthor(),
					'publisher'	 => $book->getPublisherName(),
					'genre'		 => $book->getGenre(),
					'image'		 => $book->getImage(),
					'publisherID'=> $book->getPublisherID(),
		]);
	}

	public function findById($id)
	{
		return 
			$this->bookFactory->factoryFromCollection(
				\DB::table('books')
					->select('*')
					->where('books.id', $id)
					->first()
		);
	}

	public function update($bookArray)
	{
		return 
			\DB::table('books')
				->where('books.id', $bookArray['id'])
				->update([
					'title' 	 => $bookArray['title'],
					'price'      => $bookArray['price'],
					'author'	 => $bookArray['author'],
					'genre'		 => $bookArray['genre'],
					'image'		 => $bookArray['image'],
					'publisherID'=> $bookArray['publisher'],
					'publisher'	 => $this->publisherRepository->findByID($bookArray['publisher'])->getName(),
		]);
	}

	public function delete(Book $book)
	{
		return 
			\DB::table('books')
				->where('books.id', $book->id())
				->update([
					'deleted_at' => date('Y-m-d H:i:s'),
				])
		;
	}


}