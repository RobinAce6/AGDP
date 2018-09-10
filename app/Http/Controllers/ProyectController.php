<?php

namespace App\Http\Controllers;

use App\Models\Proyect as FolderM;
use App\Models\Client as Client;

use Illuminate\Http\Request;


class ProyectController extends Core\BaseController
{
    
    public function index(Request $request) 
    {
        $clientAll = Client::all();
        $folder = FolderM::with('Client')->get();
        $selectClient = array();
        $selectClient[0] = '';
        foreach($clientAll as $client) {
            $selectClient[$client->id] = $client->name;
        }
        return view('Proyect.listF', compact('selectClient','folder'));
    }

   
    public function create()
    {
        $client = Client::all();
        return view ('folder.listF', compact('client'));
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'cod'=>'required|integer',
            'name'=>'required|max:120',
            'client_id'=>'required|not_in:0'
        ]);

        $folder = new FolderM;

        $folder->name = $request->name;
        $folder->cod = $request->cod;
        $folder->client_id = $request->client_id;
 
        $folder->save();

        return redirect()->route('proyect')
            ->with('flash_message',
             'User successfully added.');
    }

    
    public function edit($idFolder)
    {
        $client = Client::all();
        return view('proyect.updateF', compact('client'));
    }

    
    public function update(Request $request, $idFolder)
    {
        $folder = FolderM::find($idFolder);

        $folder->name = $request->name;
        $folder->cod = $request->cod;
        $folder->client_id = $request->client_id;

        $folder->save();

        return redirect()->route('proyect');
    }

   
    public function destroy($idFolder)
    {
        $folder = FolderM::find($idFolder);
        $folder->delete();
        return back();
    }
}
