<?php

namespace App\Http\Middleware;

use Closure;
use Validator;


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
        $credentialInfo = $request->all();
        $validator = Validator::make($credentialInfo, [
            'username' => 'required',
            'password' => 'required'
        ]);
        if($validator->fails())
        {
            $errors = $validator->errors();
            $errorMessages = $errors->getMessages();
            return response()->view('login', [
                'errorName' => $credentialInfo['username'],
                'errorPassword'=> $credentialInfo['password'],
                'errorMessages'=> $errorMessages])
                ;

        }
        return $next($request);

    }
}
