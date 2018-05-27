<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City as City;
use App\Nodels\Department as DepartM;

class CityController extends Controller
{
    
    public function index()
    {
        $city = City::all();
        return view ('city.listC', compact('city'));
    }

    public function create()
    {
        $departm = DepartmM::all();
        return view ('city.newC', compact('departm'));
    }


    public function store(Request $request)
    {
        $city = new City;
        $city->create($request->all());
        return view ('city.listC');
    }


    public function edit($id)
    {
        return view('city.updateC');
    }

    public function update(Request $request, $idCity)
    {
        $city = City::find($idCity);

        $city->nameCity = $request->nameCity;
        $city->department_id = $request->idDepartment;

        $city->save();

        return back();
    }

    public function search (Request $request)
    {
        $user = UserM::where('City', 'like','%'.$request->nameCity.'%')->get();
    }
  
    public function destroy($idCity)
    {
        $city = City::find($idCity);
        $city->delete();
        return back();
    }
}
