<?php

namespace App\Http\Middleware;

use Closure;
use App\BookForum\Book\BookFactory;

class BookProvider
{

    private $bookFactory;

    public function __construct(BookFactory $bookFactory)
    {
        $this->bookFactory = $bookFactory;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $bookRaw = $request->all();
        $bookRaw['id'] = $this->getId($request->path());
        $bookRaw['image'] = $request->get('image');
        //dd($bookRaw);
        $book = $this->bookFactory->factory($bookRaw);
        app()->bind('Book', function () use ($book) {
            return $book;
        });
        return $next($request);
    }

    private function getId($uri){
        $array = explode('/', $uri);
        $id = end($array);
        return is_numeric($id) ? $id : null;

    }
}
