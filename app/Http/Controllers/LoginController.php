<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookForum\Auth\Authenticator;
use App\BookForum\Auth\LoginFailMessage;

class LoginController extends Controller
{
	protected $authenticator;

	public function __construct(Authenticator $authenticator)
	{
		$this->authenticator = $authenticator;
	}

	public function index()
	{
		return view('books.login');
	}

	public function authenticate(Request $request)
	{
        $username   = $request->get('username');
        $password   = $request->get('password');
        $credential = $this->authenticator->authenticate($username, $password);

        if($credential instanceof LoginFailMessage)
        {
        	return view('books.login')
        			->with([
        				'messages' => $credential->toString(),
        				'username' => $username,
        			])
        	;
        }
        else
        {
        	request()->session()->put('credential', $credential);

        	return response()->redirectToRoute('books.admin');
        }
	}

	public function logout(Request $request)
	{
		$request->session()->forget('credential');
            
        return response()->redirectToRoute('login.index');
	}
}
