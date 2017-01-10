<?php

namespace App\Http\Controllers;

use App\BookForum\AuthenticatorService\LoginFailMessagge;
use Illuminate\Http\Request;

use App\BookForum\AuthenticatorService\Authenticator;
class LoginController extends Controller
{

    protected $authenticator;

    public function __construct(Authenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function formlogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credential = $this->authenticator->authenticate($request->get('username'), $request->get('password'));
        dd($credential);
        if($credential instanceof LoginFailMessage)
        {
            //todo
            return null;
        }
        request()->session()->put('credential', $credential);
        return response()->redirectTo('home');

    }

}
