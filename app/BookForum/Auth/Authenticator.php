<?php
namespace App\BookForum\Auth;

use Illuminate\Contracts\Hashing\Hasher;

class Authenticator implements AuthInterface
{
	protected $credential;
	protected $hasher;

	public function __construct(Credential $credential, Hasher $hasher)
	{
		$this->credential = $credential;
		$this->hasher 	  = $hasher;
	}
	
	public function authenticate($username, $password)
	{
		$foundCredential = $this->credential->where('username', $username)
            ->first();
        if (! $foundCredential)
        {
            return new LoginFailMessage('username not right');
        }
        if (! $this->hasher->check($password, $foundCredential->password))
        {
            return new LoginFailMessage('password not right');
        }

        return $foundCredential;
	}
}

