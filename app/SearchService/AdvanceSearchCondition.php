<?php
namespace App\SearchService;

class AdvanceSearchCondition implements BookFindingCondition
{

	protected $title;
	protected $author;
	protected $publisher;

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function setAuthor($author)
	{
		$this->author = $author;
	}

	public function getPublisher()
	{
		return $this->publisher;
	}

	public function setPublisher($publisher)
	{
		$this->publisher = $publisher;
	}

	public function getQuery()
	{
		$searchQuery = \DB::table('books')
					->select('*')
					->whereNull('deleted_at')
					;

		$searchQuery->where(function ($query) {
			$term = explode(" ", $this->getTitle());
			if (count($term) > 0) {
			   foreach($term as $item) {
			      $query->orWhere('title','like','%'.$item.'%');
			   }
			}
		});

		$searchQuery->where(function ($query) {
			$term = explode(" ", $this->getAuthor());
			if (count($term) > 0) {
			   foreach($term as $item) {
			      $query->orWhere('author','like','%'.$item.'%');
			   }
			}
		});

		$searchQuery->where(function ($query) {
			foreach($this->getPublisher() as $publisher){
				$query->orwhere('publisher',$publisher);
			}
		});

		$listBook = $searchQuery->get();

		return $listBook;
	}
}