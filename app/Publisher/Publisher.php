<?php

namespace App\Publisher;

class Publisher
{
    protected $id;
    protected $name;
    protected $address;

    public function id()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

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
    	$this->name = $name;
    }

    public function setAddress($address)
    {
    	$this->address = $address;
    }
}
