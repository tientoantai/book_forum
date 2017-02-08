<?php
namespace App\BookForum\Auth;

interface AuthInterface
{
	public function authenticate($name, $password);
}