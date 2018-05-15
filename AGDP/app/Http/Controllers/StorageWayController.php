<?php

namespace App\Http\Controllers;

use App\Models\StorageWay as SWM;

use Illuminate\Http\Request;

class StorageWayController extends Controller
{
   
    public function index()
    {
        $storagew = SWM::all();
        return view('storageway.listSW', compact('storageway'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function edit(StorageWay $storageWay)
    {
        //
    }

   
    public function update(Request $request, StorageWay $storageWay)
    {
        //
    }

    public function destroy(StorageWay $storageWay)
    {
        //
    }
}
