<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AdminManageController extends Controller
{
    // public function __construct() {
    //     $this->middleware('admin');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){

      if (Auth()->user()->level == 1){
        $users = Admin::all();
        return view('admins.users.index')->withUsers($users);
      }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
          'username' => 'required|min:6|max:127|unique:admins,username',
          'title' => 'max:127',
          'email' => 'required|max:127|email|unique:admins,email',
          'password' => 'required|max:127|min:6|required_with:password_confirm|same:password_confirm',
          'password_confirm' => 'required|max:127|min:6',
        ));

        $user = new Admin;
        $user->username = $request->username;
        $user->title = $request->title;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Session::flash('success', 'New admin user has been created');
        return redirect()->route('users.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
      $user = Admin::find($id);
      if ($request->input('email') == $user->email) {
        $this->validate($request, array(
        'title' => 'max:127',
        'password' => 'required|max:127'
        ));
      }
      else{
        $this->validate($request, array(
          'title' => 'max:127',
          'email' => 'required|max:127|email|unique:admins,email',
          'password' => 'required|max:127'
        ));
      }

      $user = Admin::find($id);
      $user->title = $request->title;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->save();     
      Session::flash('success', 'User '.$user->username.' was successfully updated.');
      return redirect()->route('users.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $user = Admin::find($id);
      $username = $user->username;
      $user->delete();
      Session::flash('success', $username.' was successfully deleted.');
      return redirect()->route('users.index');    
    }
}
