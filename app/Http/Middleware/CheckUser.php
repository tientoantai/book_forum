<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Validation\Validator;

class CheckUser
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
            'username' => 'required',
            'password' => '
                required|
                min:6|
                regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/|
                confirmed',
        ]);
        if($validator->fails())
        {
            $errors = $validator->errors();
            dd($errors);
        }
        return $next($request);

    }
}
