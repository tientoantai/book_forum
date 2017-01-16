<?php

namespace App\Http\Middleware;

use Closure;
use App\SearchService\FactoryCondition;

class CreateCondition
{
    protected $factoryCondition;

    public function __construct(FactoryCondition $factoryCondition)
    {
        $this->factoryCondition = $factoryCondition;
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
        $quickCondition   = $this->factoryCondition->factoryQuick($request->all());
        $advanceCondition = $this->factoryCondition->factoryAdvance($request->all());

        $request->attributes->add([
            'quickCondition'   => $quickCondition,
            'advanceCondition' => $advanceCondition,
        ]);
        
        return $next($request);
    }
}
