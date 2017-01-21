<?php
namespace App\BookForum\PublisherService;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publisher extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

}