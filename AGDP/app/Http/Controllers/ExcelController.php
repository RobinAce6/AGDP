<?php

namespace App\Http\Controllers;

use App\Models\City;
use Excel;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function index()
    {
        return view('city.newC');
    }

    public function importExcel(Request $request)
    {
        $request->validate([
            'import_file' => 'required'
        ]);
 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path)->get();
 
        if($data->count()){
            foreach ($data as $key => $value) {
                $arr[] = ['codCity' => $value->codCity, 
                         'nameCity' => $value->nameCity];
            }
 
            if(!empty($arr)){
                City::insert($arr);
            }
        }
 
        return view('city.listaC');
    }


}
