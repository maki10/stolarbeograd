<?php

namespace App\Http\Controllers\Admin;

use App\Wall;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class WallController extends Controller
{
	public function getIndex()
	{
		$walls = Wall::all();

		return view('admin.wall.index', compact('walls'));
	}

	public function getCreate()
	{
		return view('admin.wall.create');
	}

	public function postCreate(Request $request)
	{
		$patch = 'images/walls/'. $request->file('source')->getClientOriginalName();

		if ($request->hasFile('source')) {
			Image::make($request->file('source'))->save($patch);
		}
		
		Wall::create([
			'title' => $request->title,
			'source' => $patch,
		]);

		return back();
	}

}