<?php

namespace App\Http\Controllers;

use App\Models\Dependency as DependM;
use Illuminate\Http\Request;

class DependencyController extends Controller
{
    
    public function index()
    {
        $depend = DependM::all();
        return view ('depend.listD', compact('depend'));
    }

    public function create()
    {
        return view ('depend.newD');
    }

    public function store(Request $request)
    {
        $depend = new DependM;
        $depend->create($request->all());
        return redirect('depend.listD');
    }

    public function edit($idDep)
    {
        $depend = DependM::find($idDep);
        return view('depend.updateD', compact('depend'));
    }
    
    public function update(Request $request, $idDep)
    {
        $depend = DependM::find($idDep);

        $depend->nameDep = $request->nameDep;

        $depend->save();

        return back();
    }
    
    public function search(Request $request)
    {
        $depend = DependM::where('idDep', 'like','%'.$request->idDep.'%')->get();

        $depend = DependM::where('nameDep', 'like', '%'.$request->nameDep.'%')->get();

        return view ('depend.listD', compact('depend'));
    }

    public function destroy($idDep)
    {
        $depend = DependM::find($idDep);
        $depend->delete();
        return back();
    }
}
