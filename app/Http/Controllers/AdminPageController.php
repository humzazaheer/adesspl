<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function register(){
        return view('admin/register');
    }
    public function login(){
        return view('admin/login');
    }
    public function forgot_password(){
        return view('admin/forgot-password');
    }
    public function dashboard(){
        return view('admin/index');
    }
    public function clients(){
        return view('admin/clients');
    }
    public function gallery(){
        return view('admin/gallery');
    }
    public function experience(){
        return view('admin/experience');
    }
}
