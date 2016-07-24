<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	/**
	 * Index admin page
	 * @return type
	 */
	public function getIndex()
	{
		return view('admin.index');
	}

	/**
	 * Form for login admin
	 * @return type
	 */
    public function getLogin()
    {
    	return view('admin.login');
    }

    /**
     * Login admin
     * @param Request $request 
     * @return response
     */
    public function postLogin(Request $request)
    {
		if (Auth::guard('admin')->check() || Auth::guard('admin')->attempt(['email' => $request->get('email'), 'password' => $request->get('password')], true)) {

   			return redirect('administration');		
   		}
   		else {
			return back()->with(['message' => 'Login failed']);
		}    	
    }
}