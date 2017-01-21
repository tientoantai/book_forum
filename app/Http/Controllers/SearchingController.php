<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SearchService\QuickSearchCondition;
use App\SearchService\AdvanceSearchCondition;
use App\SearchService\BookFinder;
use App\BookForum\Book\Book;

class SearchingController extends Controller
{
    protected $bookFinder;

    public function __construct(BookFinder $bookFinder)
    {
        $this->bookFinder = $bookFinder;
    }

    public function advanceSearch(Request $request)
    {
        $condition  = $request->get('advanceCondition');
        $bookResult = $this->bookFinder->find($condition);

        return view('books.book-filter')
                ->with(['books'=> $bookResult,
                        'request'=>$request
                    ])
                
        ;
    }

    public function quickSearch(Request $request)
    {
        $condition  = $request->get('quickCondition');
        $bookResult = $this->bookFinder->find($condition);

        return view('books.book-filter')
                ->with('books', $bookResult)
        ;
    }
}
