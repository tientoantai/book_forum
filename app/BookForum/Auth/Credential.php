<?php
namespace App\BookForum\Auth;

use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
	protected $fillable = ['username', 'password'];
}