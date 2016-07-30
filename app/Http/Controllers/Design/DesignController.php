<?php

namespace App\Http\Controllers\Design;

use App\Wall;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignController extends Controller
{
 
	public function getIndex()
	{
		$walls = Wall::all();

		return view('design.index', compact('walls'));
	}

}