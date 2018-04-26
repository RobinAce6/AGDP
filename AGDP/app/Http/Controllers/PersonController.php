<?php

namespace App\Http\Controllers;

use App\Models\PersonModel as PersonM;

use Illuminate\Http\Request;



class PersonController extends Controller
{
    public function index()
    {
        $person = PersonM::all();
        return view('person.listP', compact('person'));
    }

   
    public function create()
    {
        return view('Person.newP');
    }

  
    public function store(Request $request)
    {
        $person = new PersonM;
        $person->create($request->all());
        return redirect('Person');
    }

  
    public function show($id)
    {
        //
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
