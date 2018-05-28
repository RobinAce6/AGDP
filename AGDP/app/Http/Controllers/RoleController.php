<?php

namespace App\Http\Controllers;

use App\Models\Role as RoleM;

use Illuminate\Http\Request;


class RoleController extends Controller
{
    public function index()
    {
        $role = RoleM::all();
        return view('role.listR', compact('role'));
    }

    public function create()
    {
        return view ('role.newR');
    }

    public function store(Request $request)
    {
        $role = new RoleM;
        $role->create($request->all());
        return redirect('role.listR');
    }
    
    public function edit($idRole)
    {
        $role = RoleM::find($idRole);
        return view('role.updateR', compact('role'));
    }

    
    public function update(Request $request, $idRole)
    {
        $role = RoleM::find($idRole);

        $role->nameRole = $request->nameRole;

        $role->save();

        return redirect('role.listR');
    }

    public function search(Request $request)
    {
        $role = RoleM::where('idRole', 'like','%'.$request->idRole.'%')->get();

        $role = RoleM::where('nameRole', 'like', '%'.$request->nameRole.'%')->get();

        return view ('role.listR', compact('role'));
    }

    public function destroy($idRole)
    {
        $role = RoleM::find($idRole);
        $role->delete();
        return back();
    }
}