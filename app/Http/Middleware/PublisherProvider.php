<?php

namespace App\Http\Middleware;

use App\BookForum\PublisherService\PublisherFactory;
use Closure;

class PublisherProvider
{
    protected $publisherFactory;

    public function __construct(PublisherFactory $publisher)
    {
        $this->publisherFactory = $publisher;
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
        $publishers = $request->all();
        $publishers['id']= $this->getId($request->path());
        $publisher = $this->publisherFactory->factory($publishers);
        app()->bind(get_class($publisher), function () use ($publisher) {
            return $publisher;
        });
        return $next($request);
    }

    public function getId($uri)
    {
        $array = explode('/',$uri);
        $id = end($array);
        return is_numeric($id)? $id : null;
    }
}
