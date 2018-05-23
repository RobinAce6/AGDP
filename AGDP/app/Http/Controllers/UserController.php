<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User as UserM;


class UserController extends Controller
{

    public function index()
    {
        $user = UserM::all();
        return view('user.listU', compact('user'));
    }

    
    public function create()
    {
        return view('user.newU');
    }

    public function store(Request $request)
    {
        $user = new UserM;
        $user->create($request->all());
        return redirect('user.listU');
    }

    public function edit($idUser)
    {
        $user = UserM::find($idUser);
        return view('user.updateU', compact('user'));

    }

    public function update(Request $request, $idUser)
    {
        $user = UserM::find($idUser);

        $user->codPerson      = $request->codPerson;
        $user->namePerson     = $request->namePerson;
        $user->lastnamePerson = $request->lastnamePerson;
        $user->emailPerson    = $request->emailPerson;
        $user->typePerson_id  = $request->typePerson_id;
        $user->dependency_id  = $request->dependency_id;       
        $user->userPerson     = $request->emailPerson;
        $user->passwordPerson = $request->passwordPerson;
        $user->confirPassPerson = $request->confirPassPerson;

        $user->save();

        return back;
    }

    public function search (Request $request)
    {
        $user = UserM::where('userPerson', 'like','%'.$request->userName.'%')->get();
    }

    public function destroy($idUser)
    {
        $user = UserM::find($idUser);
        $user->delete();
        return back();
    }
}
    