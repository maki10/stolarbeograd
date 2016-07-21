<?php

namespace App\Http\Controllers\Design;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DesignController extends Controller
{
 
	public function getIndex()
	{
		return view('design.index');
	}

}