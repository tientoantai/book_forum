<?php
namespace App\BookForum\AuthenticatorService;

use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    protected $fillable = ['username', 'password'];
}