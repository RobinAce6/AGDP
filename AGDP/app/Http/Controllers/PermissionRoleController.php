<?php

namespace App\Http\Controllers;

use App\Models\Permission_Role as PRM;
use App\Models\Role as Role;
use App\Models\Permission as Permission;

use Illuminate\Http\Request;

class PermissionRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisrole = PRM::with('Permission', 'Role')->get();
        return view('permission_role.listPR', compact('permisrole'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permis = Permission::all();
        $role = Role::all();
        return view('permission_role.newPR', compact('permis', 'role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permisrole = new PRM;

        $permisrole->permission_id = $request->idPermission;
        $permisrole->role_id = $request->idRole;

        $permisrole->save();

        return redirect('permission_role.listPR');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission_Role  $permission_Role
     * @return \Illuminate\Http\Response
     */
    public function show(Permission_Role $permission_Role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission_Role  $permission_Role
     * @return \Illuminate\Http\Response
     */
    public function edit($nPR)
    {
        $permisrole = PRM::find($nPR);
        return view('permission_role.updatePR', compact('permisrole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission_Role  $permission_Role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nPR)
    {
        $permisrole = PRM::find($nPR);

        $permisrole->permission_id = $request->idPermission;
        $permisrole->role_id = $request->idRole;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission_Role  $permission_Role
     * @return \Illuminate\Http\Response
     */
    public function destroy($nPR)
    {
        $permisrole = PRM::find($nPR);
        $permisrole->delete();
        return bakc();
    }
}
