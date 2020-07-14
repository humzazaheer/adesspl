<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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
}
