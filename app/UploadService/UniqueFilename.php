<?php
namespace App\UploadService;

use  Webpatser\Uuid\Uuid;


class UniqueFilename
{
	public function generator()
	{
		return Uuid::generate()->toString;
	}
}