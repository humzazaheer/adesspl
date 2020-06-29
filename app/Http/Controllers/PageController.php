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


    // Solution & services pages
    public function turnkey_epc_project()
    {
        return view('turnkey_epc_project', []);
    }
    public function fabrication_and_plant_eraction()
    {
        return view('fabrication_and_plant_eraction', []);
    }
    public function installation_and_commissioning_of_plant_machinery()
    {
        return view('installation_and_commissioning_of_plant_machinery', []);
    }
    public function o_m_services()
    {
        return view('o_m_services', []);
    }
    public function manufacturing_of_machine_element()
    {
        return view('manufacturing_of_machine_element', []);
    }
    public function overhauling_of_diesel_engine_and_parts()
    {
        return view('overhauling_of_diesel_engine_and_parts', []);
    }
    public function design_engineering()
    {
        return view('design_engineering', []);
    }
    public function project_management_consultancy()
    {
        return view('project_management_consultancy', []);
    }
    public function plant_maintenance_and_turnaround()
    {
        return view('plant_maintenance_and_turnaround', []);
    }
    public function infrastructure_and_mep()
    {
        return view('infrastructure_and_mep', []);
    }
    public function manpower_supply()
    {
        return view('manpower_supply', []);
    }
    public function equipment_on_rent()
    {
        return view('equipment_on_rent', []);
    }


}
