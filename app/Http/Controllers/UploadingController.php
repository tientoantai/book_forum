<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploadService\Uploader;
use App\UploadService\UniqueFilename;

class UploadingController extends Controller
{
	public function index()
	{
		return view('uploads.index');
	}

	public function store(Request $request)
	{
		$uniqueFilename = new UniqueFilename();
		$uploader 		= new Uploader($uniqueFilename);

		$uploadedFile 	= $request->file('image');
		$uploader       ->setFiledir('uploads/');
		$uniqueFilename = $uploader->upload($uploadedFile);
		$filepath       = "uploads/".$uniqueFilename;

		return view('uploads.show')
				->with('image',$filepath);
	}
}
