<?php
namespace App\BookForum\Book;

use App\Publisher\PublisherRepository;

class BookFactory
{
	protected $publisherRepository;

	public function __construct(PublisherRepository $publisherRepository)
	{
		$this->publisherRepository = $publisherRepository;
	}

	public function factoryFromArray($bookArray)
	{
		$book = new Book();

		$book->setTitle($bookArray['title']);
		$book->setPrice($bookArray['price']);
		$book->setAuthor($bookArray['author']);
		$book->setGenre($bookArray['genre']);
		$book->setImage($bookArray['image']);
		$book->setPublisherID($bookArray['publisher']);
		$book->setPublisherName($this->publisherRepository->findByID($bookArray['publisher'])->getName());
		
		return $book;
	}

	public function factoryFromCollection($bookCollection)
	{
		
		$book = new Book();

		$book->setId($bookCollection->id);
		$book->setTitle($bookCollection->title);
		$book->setPrice($bookCollection->price);
		$book->setAuthor($bookCollection->author);
		$book->setPublisherName($bookCollection->publisher);
		$book->setGenre($bookCollection->genre);
		$book->setImage($bookCollection->image);
		$book->setPublisherID($bookCollection->publisherID);
		
		return $book;
	}

}