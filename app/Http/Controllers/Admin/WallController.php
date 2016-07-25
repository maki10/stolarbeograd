<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WallController extends Controller
{
	public function getIndex()
	{
		return view('admin.wall.index');
	}

	public function getCreate()
	{
		return view('admin.wall.create');
	}
}