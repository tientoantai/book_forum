<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Validator;

class PublisherValidator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $validator = Validator::make($request->all(), [
            'name'   => 'required',
            'address'=> 'required',
        ]);
        
        if($validator->fails()){

            return back()
                    ->withErrors($validator->errors())
                    ->withInput();
        }

        return $next($request);
    }
}
