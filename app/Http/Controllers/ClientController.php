<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Client $client
     * @return \Illuminate\Http\Response
     */
    public function index(Client $client)
    {
        return view('/admin/clients', ['client' => $client->all()]);
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
        $file_name = $request->client_name . '.' . $logo->getClientOriginalExtension();
        $logo->move(public_path('/uploads'), $file_name);
        $client->client_logo = $file_name;
        $client->save();
        return redirect('/admin/clients');

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
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client, Request $request)
    {
        $client->client_id = $request->get('client_id');
        $data = array('client_active_status' => '0');
        $client->update($data);
        return redirect('/admin/clients');


    }
}
