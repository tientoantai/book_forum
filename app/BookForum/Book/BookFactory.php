<?php
namespace App\BookForum\Book;

use App\BookForum\Book\Book;

class BookFactory
{
    /**
     * @param array $rawData
     * @return Book
     */
    public function factory($rawData)
    {
        if ($rawData['id']){
            $book = Book::find($rawData['id']);
        }else{
            $book = new Book();
        }
        //dd($rawData);
        $book->title = $rawData['title'];
        $book->price = $rawData['price'];
        $book->publisher = $rawData['publisher'];
        $book->author = $rawData['author'];
        $book->genre = $rawData['genre'];
        if ($rawData['image']){
            $book->image = $rawData['image'];
        }

        //dd($book);
        return $book;
    }
}