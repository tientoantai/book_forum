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
            'image'=> 'image|max:10000',
        ]);

        if($validator->fails()){
            return response()->json([
                'messages' =>  $validator->errors()->all(),
                ],  
                400, [], JSON_UNESCAPED_SLASHES
            );
        }

        return $next($request);
    }
}
