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
        return view('person.newP');
    }

  
    public function store(Request $request)
    {
        $person = new PersonM;
        $person->create($request->all());
        return redirect('person.listP');
    }

  
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $person = PersonM::find($id);
        return view('person.updateP', compact('person'));
    }

  
    public function update(Request $request, $id)
    {
        $person = PersonM::find($request->idPeo);
        $person->nameP = $request->$nameP;
        $person->surnameP = $request->$surnameP;
        $person->emailP = $request->$nameP;
        $person->typeeP = $request->$typeP;
        $person->save();
        return view('person.listP');
    }

    public function search (Request $request)
    {
        $person = PersonM::where('nameP','like', '%'.$request->nameP.'%')->get();

        $person = PersonM::where('surnameP','like', '%'.$request->surnameP.'%')->get();

        return view('listP', compact('person'));
    }

   
    public function destroy($id)
    {
        $person = PersonM::find($id);
        $person->delete();
        return back();
    }
}
