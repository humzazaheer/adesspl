<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;


class AdminPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        return view('admin/index');
    }
    public function clients(){
        return view('admin/client');
    }
    public function gallery(){
        return view('admin/gallery');
    }
    public function experience(){
        return view('admin/experience');
    }
    public function profile(){
        return view('admin/profile');
    }
    public function update_profile(Request $request){
        $name = $request->get('name');
        DB::update('update users set name = ? where id = ?', [$name,Auth::user()->id]);

        return Redirect::route('profile')->with('success','succeed');
    }
    public function update_password(Request $request){
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',
            'confirm_password' => 'required|same:password',
        ]);
        $current_password = Hash::check($request->get('current_password'),Auth::user()->password);
        $password = $request->get('password');
        $c_pass = $request->get('confirm_password');
        if(!$current_password){
            return Redirect::route('profile')->with('current_password','Your current password is wrong');
        }
        if($password) {
            return Redirect::route('profile')->with('success','something wrong');
        }
        $user = Auth::user();
        $user->password = $password;

    }

}
