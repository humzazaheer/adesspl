<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index', []);
    }

    public function about()
    {
        return view('about', []);
    }

    public function contact()
    {
        return view('contact', []);
    }

    public function solutionservice()
    {
        return view('solution_service', []);
    }

    public function workshop()
    {
        return view('workshop', []);
    }

    public function gallery()
    {
        return view('gallery', []);
    }

    public function experience()
    {
        return view('experience', []);
    }
    public function project_gallery()
    {
        return view('project_gallery', []);
    }


}
