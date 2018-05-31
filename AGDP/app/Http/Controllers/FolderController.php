<?php

namespace App\Http\Controllers;

use App\Models\Folder as FolderM;
use App\Models\Clients as Client;

use Illuminate\Http\Request;


class FolderController extends Controller
{
    
    public function index() 
    {
        $folder = FolderM::with('Client')->get();
        return view('folder.listF', compact('folder'));
    }

   
    public function create()
    {
        $client = Client::all();
        return view ('folder.newF', compact('client'));
    }

    public function store (Request $request)
    {
        $folder = new FolderM;

        $folder->nameFolder = $request->nameFolder;
        $folder->client_id = $request->idClient;
 
        $folder->save();

        return redirect('folder.listF');
    }

    
    public function edit($idFolder)
    {
        $client = Client::all();
        return view('folder.updateF', compact('client'));
    }

    
    public function update(Request $request, $idFolder)
    {
        $folder = FolderM::find($idFolder);

        $folder->nameFolder = $request->nameFolder;
        $folder->client_id = $request->idClient;

        $folder->save();

        return redirect('folder.listF');
    }

    public function search(Request $request)
     {
        $folder = FolderM::where('nameFolder','like', '%'.$request->nameFolder.'%')->get();

        return view('folder.listF', compact('folder'));
    }

   
    public function destroy($idFolder)
    {
        $folder = FolderM::find($idFolder);
        $folder->delete();
        return back();
    }
}
