<?php
namespace App\SearchService;

use Illuminate\Http\Request;

class FactoryCondition
{
	public function factoryQuick($conditionData)
	{
		$quickSearchCondition = new QuickSearchCondition();
		$quickSearchCondition ->setKeyword($conditionData['title']);

		return $quickSearchCondition;
	}

	public function factoryAdvance($conditionData)
	{	
		$advanceSearchCondition = new AdvanceSearchCondition();
		$advanceSearchCondition ->setTitle($conditionData['title']);
		$advanceSearchCondition ->setAuthor($conditionData['author']);

		if(! isset($conditionData['publisher'])){
			$advanceSearchCondition ->setPublisher(["1"]);
		}else{
			$advanceSearchCondition ->setPublisher($conditionData['publisher']);
		}
		

		return $advanceSearchCondition;
	}
}