<?php

namespace App\Http\Controllers;

use App\BookForum\AuthenticatorService\LoginFailMessage;
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
        return view('books.login');
    }

    /**
     * @param Request $request
     * @return null
     */
    public function login(Request $request)
    {

        $username = $request->get('username');
        $password = $request->get('password');
        $credential = $this->authenticator->authenticate($username, $password);
        if($credential instanceof LoginFailMessage)
        {
            //todo
            return view('books.login')
                ->with('message', $credential->failMessage('username or password is not correct'))
                ->with('name', $username)
                ->with('password', $password);
        }
        else{
            request()->session()->put('credential', $credential);
            return response()->redirectTo('books');

        }

    }
}
