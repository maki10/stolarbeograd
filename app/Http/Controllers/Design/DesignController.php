<?php

namespace App\Http\Controllers\Design;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignController extends Controller
{
 
	public function getIndex()
	{
		return view('design.index');
	}

}