<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clients as Client;
use App\Models\Folder as Project;
use App\Models\MailE as Mail;


class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client  = Client::all();
        return view('clients.lista', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('clients.nuevo');
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

        $client->save();

        return redirect('lista');
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
        $client = Client::find($idClient);
        return view('clients.modificar', compact('client'));
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
        $client->personClient = $request->personClient;
        $client->addressClient = $request->addressClient;

        $client->save();

        return redirect('lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($idClient)
    // {
    //     $client = Client::find($idClient);
    //     $client->delete();
    //     return back();
    // }

    // public function search (Request $request)
    // {
    //    $client = Client::where('nameClient', 'like','%'.$request->nameClient.'%')->get();
    // }

    public function editcL()
    {
        return view('clients.modificar');
    }

   
}
