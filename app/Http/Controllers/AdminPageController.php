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
        $clients_count = DB::table('clients')->select('id')->where('client_active_status','1')->get();
        $projects_count = DB::table('experiences')->select('id')->where('exp_active_status','1')->get();
        return view('admin/index', ['clientsCount'=>$clients_count, 'projectsCount'=>$projects_count] );
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

        return Redirect::route('profile')->with('success','Information successfully updated');
    }
    public function update_password(Request $request){
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);
        $current_password = Hash::check($request->get('current_password'),Auth::user()->password);
        $password = $request->get('password');
        if(!$current_password){
            return back()->with('current_password','Your current password is wrong');
        }

        $user = Auth::user();
        $user->password = bcrypt($password);
        $user->save();
        return Redirect::route('profile')->with('success','Password successfully updated');
    }

}
