<?php

namespace App\Publisher;

class PublisherRepository
{
	protected $publisherFactory;

	public function __construct(PublisherFactory $publisherFactory)
	{
		$this->publisherFactory = $publisherFactory;
	}

	public function all()
	{
		$publisherCollection = 
			\DB::table('publishers')
				->select('*')
				->whereNull('deleted_at')
				->get()
		;

		$publishers;

		foreach ($publisherCollection as $key => $value) {
			$publishers[$key] = $this->publisherFactory->factoryFromCollection($value);
		}

		return $publishers;
	}

	public function add(Publisher $publisher)
	{
		return 
			\DB::table('publishers')
				->insert([
					'name' 	  => $publisher->getName(),
					'address' => $publisher->getAddress(),
			])
		;
	}

	public function findById($id)
	{
		return 
			$this->publisherFactory->factoryFromCollection(
				\DB::table('publishers')
					->select('*')
					->where('publishers.id', $id)
					->first()
			)
		;
	}

	public function update($publisherArray)
	{
		return 
			\DB::table('publishers')
				->where('publishers.id', $publisherArray['id'])
				->update([
					'name'    => $publisherArray['name'],
					'address' => $publisherArray['address'],
				])
		;
	}

	public function delete(Publisher $publisher)
	{
		return
			\DB::table('publishers')
				->where('publishers.id', $publisher->id())
				->update([
					'deleted_at' => date('Y-m-d H:i:s'),
				])
		;
	}

}