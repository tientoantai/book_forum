<?php
namespace App\Publisher;

class PublisherFactory
{
	public function factoryFromArray($publisherData)
	{
		$publisher = new Publisher();

		$publisher->setName($publisherData['name']);
		$publisher->setAddress($publisherData['address']);
		
		return $publisher;
	}

	public function factoryFromCollection($publisherData)
	{
		$publisher = new Publisher();

		$publisher->setId($publisherData->id);
		$publisher->setName($publisherData->name);
		$publisher->setAddress($publisherData->address);

		return $publisher;

	}
}