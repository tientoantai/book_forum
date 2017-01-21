<?php

namespace App\Http\Controllers;

use App\BookForum\PublisherService\Publisher;

class PublisherController extends Controller
{
    public function listPublisher()
    {
        $publisher = Publisher::all();
        return view('publishers.listPublisher')
            ->with('publisher', $publisher);
    }

    public function insertPublisherForm()
    {
        return view('publishers.insertPublisher');
    }

    public  function insertPublisher(Publisher $publisher)
    {
        $publisher->save();
        return redirect('/publisher');
    }

    public function updatePublisherForm($id)
    {
        $publisherFirst = Publisher::find($id);
        return view('publishers.updatePublisher')->with('publisher', $publisherFirst);
    }

    public function updatePublisher(Publisher $publisher)
    {
        $publisher->save();
        return redirect(route('publisher'));

    }

}
