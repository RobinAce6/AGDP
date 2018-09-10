<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;
//use App\Models\Folder as Project;
//use App\Models\MailE as Mail;

use DB;

class ClientController extends Core\BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client  = Client::all();
        return view('clients.listCl', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('clients');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nit'=>'required|max:120',
            'name'=>'required|max:120',
            'person'=>'required|max:120',
            'address'=>'required|max:120'
        ]);
        
        $client = new Client;

        $client->nit = $request->nit;
        $client->name = $request->name;
        $client->person = $request->person;
        $client->address = $request->address;
        $client->type = 1;
        $client->cod = strtoupper(substr($request->name, 0,4));
        $client->save();

        return redirect()->route('clients')
            ->with('flash_message',
             'User successfully added.');

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
        return view('clients.updateCl', compact('client'));
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


   
}
