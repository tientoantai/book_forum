<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SearchService\QuickSearchCondition;
use App\SearchService\AdvanceSearchCondition;
use App\SearchService\BookFinder;
use App\BookForum\Book\Book;
use App\Publisher\PublisherRepository;
use App\BookForum\Book\BookFactory;


class SearchingController extends Controller
{
    protected $bookFinder;
    protected $publisherRepository;
    protected $bookFactory;

    public function __construct(BookFinder $bookFinder, PublisherRepository $publisherRepository, BookFactory $bookFactory)
    {
        $this->bookFinder          = $bookFinder;
        $this->publisherRepository = $publisherRepository;
        $this->bookFactory         = $bookFactory;
    }

    public function advanceSearch(Request $request)
    {
        $condition  = $request->get('advanceCondition');
        $bookResult = $this->bookFinder->find($condition);

        if($bookResult->count()){
            foreach ($bookResult as $key => $value) {
                $bookResult[$key] = $this->bookFactory->factoryFromCollection($value);
            }
        }
        
        return view('books.filter')
                ->with(['books'      => $bookResult,
                        'publishers' => $this->publisherRepository->all(),
                        'request'    =>$request,
                    ])
                
        ;
    }

    public function quickSearch(Request $request)
    {
        $condition  = $request->get('quickCondition');
        $bookResult = $this->bookFinder->find($condition);
        
        if($bookResult->count()){
            foreach ($bookResult as $key => $value) {
                $bookResult[$key] = $this->bookFactory->factoryFromCollection($value);
            }
        }

        return view('books.filter')
                ->with(['books'      => $bookResult,
                        'publishers' => $this->publisherRepository->all(),
                        'request'    =>$request,
                    ])
        ;
    }
}
