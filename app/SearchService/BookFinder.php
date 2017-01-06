<?php

class BookFinder
{
	public function find(BookFindingCondition $condition)
	{
		$condition->getQuery();
	}
}