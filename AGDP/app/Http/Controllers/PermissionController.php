<?php

namespace App\Http\Controllers;

use App\Models\Permission as PermM;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permis = PermM::all();
        return view('permis.listPr', compact('permis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permis.newPr');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permis = new PermM;
        $permis->create($request->all());
        return view('permis.listPr');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit($idPermission)
    {
        $permis = PermM::find($idPermission);
        return view('permis.updatePr', compact('permis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPermission)
    {
        $permis = PerM::find($idPermission);

        $permis->namePermission = $request->namePermission;

        $permis->save();

        return view('permis.listPr');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPermission)
    {
        $permis = PermM::find($idPermission);
        $permis->delete();
        return back();
    }

    public function search (Request $request)
    {
        $permis = PermM::where('namePermission', 'like','%'.$request->namePermission.'%')->get();
    }
}
