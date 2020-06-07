<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Client $client, Experience $exp)
    {
        $clients = DB::table('clients')->where('client_active_status','1')->get();
        $exps = DB::table('experiences')->join('clients', 'experiences.client_id', '=', 'clients.id')->select('clients.client_name', 'clients.client_logo', 'experiences.*')->where('exp_active_status','1')->get();
        return view('/admin/experience', ['clientData' => $clients, 'expData' => $exps]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, experience $exp)
    {
        $exp->client_id = $request->get('client_id');
        $exp->exp_description = $request->get('exp_description');
        $exp->exp_active_status = 1;
        $exp->save();
        return Redirect::route('expData.admin')->with('success', 'Work experience added successfully.');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $exp, Client $client)
    {
        $clients = DB::table('clients')->where('client_active_status','1')->get();
        return view('admin.edit_experience', compact('exp'),['clients'=>$clients]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $exp)
    {
        $exp->client_id = $request->get('client_id');
        $exp->exp_description = $request->get('exp_description');
        $exp->save();
        return Redirect::route('expData.admin')->with('success', 'Work experience updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $exp, Request $request)
    {
        $exp->exp_active_status = 0;
        $exp->save();
        return Redirect::route('expData.admin')->with('success', 'Work experience deleted successfully.');


    }
}
