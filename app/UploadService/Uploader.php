<?php
namespace App\UploadService;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class Uploader
{
	protected $uniqueFilename;
	protected $filedir;

	public function __construct(UniqueFilename $uniqueFilename)
	{
		$this->uniqueFilename = $uniqueFilename;
	}

	public function setFiledir($filedir)
	{
		$this->filedir = $filedir;
	}

	public function upload(UploadedFile $uploadedFile)
	{
		$uniqueFilename = $this->uniqueFilename->generator() . '.'
								.$uploadedFile->getClientOriginalExtension();
		$uploadedFile->move($this->filedir, $uniqueFilename);	

		return $uniqueFilename;				
	}
}