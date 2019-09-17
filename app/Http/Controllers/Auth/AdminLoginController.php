<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{

    protected $redirectTo = '/';
	public function __construct(){
		$this->middleware('guest:admin',['except' => 'logout']);
	}

    public function showLoginForm(){
    	return view('auth.admin-login'); 
    }

    public function login(Request $request){
    	//validate data

    	$this->validate($request, [
    		'username'=> 'required|max:127|min:3',
    		'password'=> 'required|min:6|max:127',

    	]);
     
    	//atempt to login user 
    	if(Auth::guard('admin')->attempt(['username'=> $request->username, 'password'=>$request->password],$request->remember))
    	{
    		return redirect()->intended(route('admin.dashboard'));
    	}
    	return redirect()->back()->withInput($request->only('username','remember'));
        Session::flash('Failed', 'User name and password do not match');
    }

    public function logout(){

        Auth::guard('admin')->logout();
        session()->flush();
        return redirect(route('admin.login')); 

    }
}

