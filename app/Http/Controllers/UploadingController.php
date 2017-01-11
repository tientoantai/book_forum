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
		$uploadedFile = $request->file('image');
		$uploader = new Uploader($uniqueFilename);
		$uploader->setFiledir('uploads/');
		$uniqueFilename = $uploader->upload($uploadedFile);
		$file->move($destination_path, $filename);
		$filepath = "uploads/".$uniqueFilename;

		return view('uploads.show')
				->with('image',$filepath);
	}
}
