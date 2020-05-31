<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Client $client)
    {
        $clients = DB::table('clients')->where('client_active_status','1')->get();
        return view('/admin/clients', ['clientData' => $clients]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Client $client)
    {
        $client->client_name = $request->get('client_name');
        $client->locale = $request->get('locale');
        $logo = $request->file('client_logo');
        $client->client_active_status = 1;
        $file_name = $request->client_name . '_' . date('d_m_y_H_s_i') . '.' . $logo->getClientOriginalExtension();
        $logo->move(public_path('/uploads'), $file_name);
        $client->client_logo = $file_name;
        $client->save();
        return Redirect::route('clientData.admin')->with('success', 'Client added successfully.');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {

        return view('admin.edit_client', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client->client_name = $request->get('client_name');
        $client->locale = $request->get('locale');
        $client_current_logo = $request->get('client_current_logo');
        $logo = $request->file('client_logo');
        if ($logo) {
            if (file_exists('/uploads/' . $client_current_logo)) {
                unlink('/uploads/' . $client_current_logo);
            }
            $file_name = $request->client_name . '_' . date('d_m_y_H_s_i') . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('/uploads'), $file_name);
            $client->client_logo = $file_name;
        }
        $client->save();
        return Redirect::route('clientData.admin')->with('success', 'Client updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client, Request $request)
    {
        $client->client_active_status = 0;
//        $data = array('client_active_status' => '0');
        $client->save();
        return Redirect::route('clientData.admin')->with('success', 'Client deleted successfully.');


    }
}
