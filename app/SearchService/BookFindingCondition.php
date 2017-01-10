<?php
namespace App\SearchService;

interface BookFindingCondition
{
	public function getQuery();
}