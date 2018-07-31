<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function index()
    {
        return view('city.newC');
    }

    public function importFile(Request $request){

        if($request->hasFile('excel')){

            $path = $request->file('excel')->getRealPath();

            $data = \Excel::load($path)->get();



            if($data->count()){

                foreach ($data as $key => $value) {

                    $arr[] = ['codCity' => $value->codCity, 'nameCity' => $value->nameCity];

                }

                if(!empty($arr)){

                    DB::table('city')->insert($arr);

                    dd('Terminado');

                }

            }

        }

        dd('No hay archivo para importar');      

    } 


}
