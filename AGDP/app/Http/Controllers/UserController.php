<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User as UserM;
use App\Models\Person as PersonM;


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

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
