<?php
/**
 * Created by PhpStorm.
 * User: thuthao
 * Date: 21/01/2017
 * Time: 16:47
 */

namespace App\BookForum\PublisherService;


class PublisherFactory
{
    public function factory($dataPublisher)
    {
        $publisher = new Publisher();
        $publisher->name = $dataPublisher['name'];
        $publisher->address = $dataPublisher['address'];
        return $publisher;
    }

}