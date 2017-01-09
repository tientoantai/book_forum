<?php
namespace App\SearchService;

class QuickSearchCondition implements BookFindingCondition
{
	protected $keyword;

	public function getKeyword()
	{
		return $this->keyword;
	}

	public function setKeyword($keyword)
	{
		$this->keyword = trim($keyword);
	}

	public function getQuery()
	{
		
		$searchQuery = \DB::table('books')
					->select('*')
					->whereNull('deleted_at')
					;

		$searchQuery->where(function ($query) {
			$term = explode(" ", $this->getKeyword());
			if (count($term) > 0) {
			   foreach($term as $item) {
			      $query->orWhere('title','like','%'.$item.'%');
			   }
			}
		});

		$listBook = $searchQuery->get();

		return $listBook;
	}
}


