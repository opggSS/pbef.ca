<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Auth;

class AdminLoginController extends Controller
{
	public function __construct(){
		$this->middleware('guest:admin');
	}

    public function showLoginForm(){
    	return view('auth.admin-login'); 
    }

    public function login(){
    	//validate data

    	$this->validate($request, [
    		'username'=> 'required|max:127|min:3',
    		'password'=> 'required|min:6|max:127',

    	]);
   		// dd(Auth::guard('admin'));

    	//atempt to login user 
    	if(Auth::guard('admin')->attempt(['username'=> $request->username, 'password'=>$request->password],$request->remember))
    	{
    		return redirect()->intended(route('admin.dashboard'));
    	}

    	return redirect()->back()->withInput($request->only('username','remember'));

    	//if not redirect mqseries_back(hconn, compCode, reason)
    }
}
