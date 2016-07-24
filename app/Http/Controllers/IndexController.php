<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    /**
     * Index page
     * @return type
     */
    public function getIndex()
    {
    	return view('index');
    }    

    /**
     * Project page
     * @return type
     */
    public function getProject()
    {
    	return view('project');
    }
}