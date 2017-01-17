<?php

namespace App\Publisher;

use App\Publisher\Publisher;

class PublisherRepository
{
	protected $publisherFactory;

	public function __construct(FublisherFactory $publisherFactory)
	{
		$this->publisherFactory = $publisherFactory;
	}

	public function all()
	{
		\DB::tables('publishers')
			->select('*')
			->whereNull('deleted_at')
			->get()
		;
	}

	public function add(Publisher $publisher)
	{
		\DB::tables('publishers')
			->insert([
				'name' 	  => $publisher->getName(),
				'address' => $publisher->getAddress(),
				'rate'    => $publisher->getRate(),
		]);
	}


}