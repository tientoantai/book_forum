<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadingController extends Controller
{
	public function store(Request $request)
	{
        return response()->json([
        		'image'    => $request->get('image'),
        	], 200, [], JSON_UNESCAPED_SLASHES);
	}
}
