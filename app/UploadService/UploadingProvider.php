<?php

namespace App\UploadService;

use Illuminate\Http\Request;
use App\UploadService\Uploader;
use App\UploadService\UniqueFilename;

class UploadingProvider
{
	// public function index()
	// {
	// 	return view('insert');
	// }

	public function providerFile(Request $request)
	{
		$uniqueFilename = new UniqueFilename();
		$uploader 		= new Uploader($uniqueFilename);

		$uploadedFile 	= $request->file('image');
		$uploader       ->setFiledir('uploads/');
		$uniqueFilename = $uploader->upload($uploadedFile);
		$filepath       = "uploads/".$uniqueFilename;

		return $filepath;
	}
}
