<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SearchService\QuickSearchCondition;
use App\SearchService\AdvanceSearchCondition;
use App\SearchService\BookFinder;

class SearchingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchPage()
    {
        return view('search');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        //quick search
        $QuickSearchCondition = new QuickSearchCondition();
        $QuickSearchCondition->setKeyword($request->all()['q']);

        //advance search
        $AdvanceSearchCondition = new AdvanceSearchCondition();
        $AdvanceSearchCondition->setAuthor($request->all()['q']);
        $AdvanceSearchCondition->setAuthor($request->all()['q']);

        $BookFinder = new BookFinder();
        dd($BookFinder->find($AdvanceSearchCondition));

    }
}
