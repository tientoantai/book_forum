<?php
/**
 * Created by PhpStorm.
 * User: thuthao
 * Date: 09/01/2017
 * Time: 15:57
 */

namespace App\BookForum\AuthenticatorService;

use Illuminate\Contracts\Hashing\Hasher;


class Authenticator implements Authcontract
{
    protected $credential;
    protected $hasher;

    /**
     * Authenticator constructor.
     * @param \App\BookForum\AuthenticatorService\Credential $credential
     * @param Hasher $hasher
     */
    public function __construct(Credential $credential, Hasher $hasher)
    {
        $this->credential = $credential;
        $this->hasher = $hasher;
    }

    public function authenticate($name, $password)
    {
        $foundCredential = $this->credential->where('username', '=', $name)->first();
        if( ! $foundCredential)
        {
            return new LoginFailMessage('Username is incorrect');
        }

        if( ! $this->hasher->check($password, $foundCredential->password))
        {
            return new LoginFailMessage('Password is incorrect');
        }

        return $foundCredential;

    }
}
