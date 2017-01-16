<?php

namespace App\Http\Controllers;

use App\BookForum\AuthenticatorService\LoginFailMessage;
use App\BookForum\AuthenticatorService\LoginFailMessagge;
use Illuminate\Http\Request;

use App\BookForum\AuthenticatorService\Authenticator;
use Illuminate\Support\Facades\Session;
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

    /**
     * @param Request $request
     * @return null
     */
    public function login(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');
        $credential = $this->authenticator->authenticate($request->get('username'), $request->get('password'));
        if($credential instanceof LoginFailMessage)
        {
            //todo
            return view('login')
                ->with('message', $credential->failMessage('username hoac password k ton tai'))
                ->with('name', $username)
                ->with('pasword', $password);
        }
        else{
            request()->session()->put('credential', $credential);
            //dd( request()->session());
            return response()->redirectTo('books');
        }

    }
}
