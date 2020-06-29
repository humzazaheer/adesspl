<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

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

    public function sendMail(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $company = $request->get('company');
        $message = $request->get('message');

        $data = [$name, $email, $phone, $company,$message];

        Mail::to('faiqueimtiaz123@gmail.com')->send(new ContactMail($data));
        return Redirect::route('contact');
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
