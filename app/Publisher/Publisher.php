<?php

namespace App\Publisher;

use Illuminate\Database\Eloquent\Model;

class Publisher
{
    protected $name;
    protected $address;

    public function getName()
    {
    	return $this->name;
    }

    public function getAddress()
    {
    	return $this->address;
    }

    public function setName($name)
    {
    	$this->Name = $name;
    }

    public function setAddress($address)
    {
    	$this->address = $address;
    }
}
