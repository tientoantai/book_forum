<?php

namespace App\Http\Middleware;

use Closure;
use App\Publisher\PublisherFactory;

class CreatePublisher
{
    protected $publisherFactory;

    public function __construct(PublisherFactory $publisherFactory)
    {
        $this->publisherFactory = $publisherFactory;
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
        $publisher = $this->publisherFactory->factoryFromArray($request->all());
        $request->attributes->add([
            'publisher'              =>$publisher,
        ]);

        return $next($request);
    }
}
