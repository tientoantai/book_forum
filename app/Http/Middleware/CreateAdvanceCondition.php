<?php

namespace App\Http\Middleware;

use Closure;
use App\SearchService\FactoryCondition;

class CreateAdvanceCondition
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
        $advanceCondition = $this->factoryCondition->factoryAdvance($request->all());

            $request->attributes->add([
                'advanceCondition' => $advanceCondition,
            ]);

        return $next($request);
    }
}
