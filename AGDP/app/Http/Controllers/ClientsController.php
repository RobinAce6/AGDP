<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clients as ClientM;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = ClientM::all();
        return view('clients.listCl', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.newCl');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$idClient)
    {
        $client = ClientM::find($idClient);
        $client->create($request->$all());
        return redirect('clients.listCl');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idClient)
    {
        return view('clients.updateCl');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idClient)
    {
        $client = ClientM::find($idClient);

        $client->consecutiveClient = $request->consecutiveClient;
        $client->nameClient = $request->nameClient;

        $client->save();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idClient)
    {
        $client = ClientM::find($idClient);
        $client->delete();
        return back();
    }

    public function search(Request $request)
    {
        $client = ClientM::where('idClient', 'like','%'.$request->idClient.'%')->get();

        $client = ClientM::where('consecutiveClient', 'like', '%'.$request->consecutiveClient.'%')->get();

        return view ('clients.listCl', compact('client'));
    }
}
