<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clients as Client;
use App\Models\Folder as Project;
use App\Models\MailE as Mail;

use DB;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients  = Client::all();
        return view('clients.listaCl', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::all();
        return view('clients.nuevoCl', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;

        $client->nitClient = $request->nitClient;
        $client->nameClient = $request->nameClient;
        $client->personClient = $request->personClient;
        $client->addressClient = $request->addressClient;
        $client->typeClient = $request->typeClient;        

        $client->save();

        return view('folder.ListaCl');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idClient)
    {
        $client = Client::find($idClient);
        return view('clients.modificarCl', compact('client'));
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
        $client = Client::find($idClient); 

        $client->nitClient = $request->nitClient;
        $client->nameClient = $request->nameClient;
        $client->addressClient = $request->addressClient;

        $client->save();

        return redirect('clients');
    }


   
}
