<?php
namespace App\SearchService;

class BookFinder
{
	public function find(BookFindingCondition $condition)
	{
		return $condition->getQuery();
	}
}