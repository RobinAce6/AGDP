<?php

namespace App\Http\Controllers;

use App\Models\Folder as FolderM;

use Illuminate\Http\Request;


class FolderController extends Controller
{
    
    public function index() 
    {
        $folder = FolderM::all();
        return view('folder.listF', compact('folder'));
    }

   
    public function create()
    {
        return view ('folder.newF');
    }

    public function store(Request $request)
    {
        $folder = new FolderM;
        $folder->create($request->all());
        return redirect('folder.listF');
    }

    
    public function edit($idFolder)
    {
        $folder = FolderM::find($idFolder);
        return view('folder.updateF', compact('folder'));
    }

    
    public function update(Request $request, $idFolder)
    {
        $folder = FolderM::find($idFolder);

        $folder->nameFolder = $request->nameFolder;

        $folder->save();

        return back();
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
