<?php

namespace App\Publisher;

use Illuminate\Database\Eloquent\Model;

class Publisher
{
    protected $name;
    protected $address;
    protected $rate;

    public function getName()
    {
    	return $this->name;
    }

    public function getAddress()
    {
    	return $this->address;
    }

    public function getRate()
    {
    	return $this->rate;
    }

    public function setName($name)
    {
    	$this->Name = $name;
    }

    public function setAddress($address)
    {
    	$this->address = $address;
    }

    public function setRate($rate)
    {
    	$this->rate = $rate;
    }
}
