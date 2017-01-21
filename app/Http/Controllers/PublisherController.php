<?php

namespace App\Http\Controllers;

use App\BookForum\PublisherService\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function listPublisher()
    {
        $publisher = Publisher::all();
        return view('publishers.listPublisher')
            ->with('publisher', $publisher);
    }
}
