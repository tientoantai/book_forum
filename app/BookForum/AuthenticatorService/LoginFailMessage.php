<?php
/**
 * Created by PhpStorm.
 * User: thuthao
 * Date: 09/01/2017
 * Time: 17:18
 */

namespace App\BookForum\AuthenticatorService;


class LoginFailMessage
{
    protected $message;
    public function __construct($message)
    {
        $this->message = $message;

    }
    public function failMessage($message)
    {
        return $this->message;
    }

}