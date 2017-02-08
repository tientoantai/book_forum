<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publisher\PublisherRepository;

class PublisherController extends Controller
{
    protected $publisherRepository;

    public function __construct(PublisherRepository $publisherRepository)
    {
        $this->publisherRepository = $publisherRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        return view('publishers.admin')
                ->with('publishers', $this->publisherRepository->all())
            ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publishers.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->publisherRepository->add($request->get('publisher'));

        return redirect()->route('publishers.admin');
    }

    public function edit($id)
    {
        $publisher = $this->publisherRepository->findById($id);

        return view('publishers.edit')
                ->with('publisher', $publisher)
        ;
    }

    public function update(Request $request)
    {
        $this->publisherRepository->update($request->all());

        return redirect()->route('publishers.show',['id'=>$request->id]);
    }

    public function delete($id)
    {
        $publisher = $this->publisherRepository->findById($id);
        $this->publisherRepository->delete($publisher);

        return redirect()->route('publishers.admin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('publishers.show')
            ->with('publisher', $this->publisherRepository->findById($id))
        ;
    }
}
