<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        $client_logos = DB::table('clients')->select('client_logo')->where('client_active_status','1')->get();
        return view('index', ['clientLogos' => $client_logos]);
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
        return view('solutionservice', []);
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


}
