<?php

namespace App\UploadService;

use Illuminate\Http\Request;

class UploadingProvider
{
	public function provide(Request $request)
	{
		$uniqueFilename = new UniqueFilename();
		$uploader 		= new Uploader($uniqueFilename);
		$uploadedFile 	= $request->file('image');
		$uploader       ->setFiledir('uploads/');
		$uniqueFilename = $uploader->upload($uploadedFile);
		$filePath       = "uploads/".$uniqueFilename;
		return $filePath;
	}
}
