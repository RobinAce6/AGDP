<?php

namespace App\Http\Controllers;

use App\Models\StorageWay as SWM;

use Illuminate\Http\Request;

class StorageWayController extends Controller
{
   
    public function index()
    {
        $storagew = SWM::all();
        return view('storagew.listSW', compact('storagew'));
    }

    
    public function create()
    {
        return view ('storagew.newSW');
    }

    
    public function store(Request $request)
    {
        $storagew = new SWM;
        $storagew->create($request->all());
        return redirect('storagew.listSW');
    }

    
    public function edit($idSW)
    {
        $storagew = SWM::find($idSW);
        return view('storagew.updateSW', compact('storagew'));
    }

   
    public function update(Request $request, $idSW)
    {
        $storagew = SWM::find($idSW);

        $storagew->nameSW = $request->nameSW;

        $storagew->save();

        return back();
    }

    public function search(Request $request)
    {
        $storagew = SWM::where('idSW', 'like','%'.$request->idSW.'%')->get();

        return view ('storagew.listSW', compact('storagew'));
    }
    
    public function destroy($idSW)
    {
        $storagew = SWM::find($idSW);
        $storagew->delete();
        return back();
    }

}
