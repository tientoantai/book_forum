<?php

namespace App\Http\Middleware;

use Closure;
use App\BookForum\Book\BookFactory;

class CreateBook
{
    protected $bookFactory;

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
        $book = $this->bookFactory->factoryFromArray($request->all());

        $request->attributes->add([
            'book'=> $book,
        ]);

        return $next($request);
    }
}
