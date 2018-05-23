<?php

namespace App\Http\Controllers;

use App\Models\typePerson as TPM;
use Illuminate\Http\Request;

class TypePersonController extends Controller
{
    
    public function index()
    {
        $typep = TPM::all();
        return view('typePerson.listTP', compact('typep'));
    }

    public function create()
    {
        return view('typePerson.newTP');
    }

    
    public function store(Request $request)
    {
        //
    }


   
    public function edit(typePerson $typePerson)
    {
        //
    }

   
    public function update(Request $request, typePerson $typePerson)
    {
        //
    }
    
    public function destroy(typePerson $typePerson)
    {
        //
    }
}
