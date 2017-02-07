<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
		$credentials = array(
            'username' => $request->all()['username'],
            'password' => $request->all()['password']
        );
        

        dd($credentials);
	}
}
