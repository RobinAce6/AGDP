<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Folder as FolderM;
use App\Models\Clients as Client;


class FolderController extends Controller
{
    
    public function index(Request $request) 
    {
        $client = Client::all();
        $folder = FolderM::with('Client')->get();
        return view('folder.lista', compact('folder', 'client'));
    }

   
    public function create()
    {
        $client = Client::all();
        return view ('folder.nuevo', compact('client'));
    }

    public function store (Request $request)
    {
        $folder = new FolderM;

        $folder->nameFolder = $request->nameFolder;
        $folder->client_id = $request->idClient;
 
        $folder->save();

        return redirect('lista');
    }

    
    public function edit($idFolder)
    {
        
        $folder = FolderM::find($idFolder);
        $client = Client::all();
        return view('folder.editF', compact('client', 'folder'));
    }

    
    public function update(Request $request, $idFolder)
    {
        $folder = FolderM::find($idFolder);

        $folder->nameFolder = $request->nameFolder;
        $folder->client_id = $request->idClient;

        $folder->save();

        return redirect('folder.lista');
    }

   
    // public function destroy($idFolder)
    // {
    //     $folder = FolderM::find($idFolder);
    //     $folder->delete();
    //     return back();
    // }

    // public function verF()
    // {
    //     return view('folder.ver');
    // }

    // public function editF()
    // {
    //     return view('folder.edit');
    // }
}
