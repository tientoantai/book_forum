<?php
namespace App\Publisher;

class PublisherFactory
{
	public function factory($publisherData)
	{
		$publisher = new Publisher();

		$publisher->setName($publisherData['name']);
		$publisher->setAddress($publisherData['address']);
		$publisher->setRate($publisherData['rate']);
		
		return $publisher;
	}
}