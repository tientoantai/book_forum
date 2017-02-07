<?php
namespace App\BookForum\Book;

class Book
{
	protected $id;
	protected $title;
	protected $price;
	protected $author;
	protected $publisherName;
	protected $genre;
	protected $image;
	protected $publisherID;

	public function id()
	{
		return $this->id;
	} 

	public function getTitle()
	{
		return $this->title;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function getPublisherName()
	{
		return $this->publisherName;
	}

	public function getGenre()
	{
		return $this->genre;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function getPublisherID()
	{
		return $this->publisherID;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}

	public function setAuthor($author)
	{
		$this->author = $author;
	}

	public function setPublisherName($publisherName)
	{
		$this->publisherName = $publisherName;
	}

	public function setGenre($genre)
	{
		$this->genre = $genre;
	}

	public function setImage($image)
	{
		$this->image = $image;
	}

	public function setPublisherID($publisherID)
	{
		$this->publisherID = $publisherID;
	}
}
