<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Validator;


class ImageValidator
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
            'image'=> 'required|image|max:10000'
        ]);
        
        if($validator->fails()){

            return back()
                    ->withErrors($validator->errors())
                    ->withInput();
        }

        return $next($request);
    }
}
