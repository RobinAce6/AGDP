<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Proyect;
use App\User;


class AjaxController extends Core\BaseController {
	
   	public function index(){
      	$msg = "This is a simple message.";
      	return response()->json(array('msg'=> $msg), 200);
   	}


   	public function ciudad($id)
   	{      
   		$response = City::where('department_id','=',$id)->get();
         $selectCiudad[0] = 'Seleccione Ciudad';
         foreach ($response as $key) {
            $selectCiudad[$key->id] = $key->name;
         }
   		return response()->json(array('msg'=> $selectCiudad), 200);
   	}
      public function proyecto($id)
      {
         $response = Proyect::where('client_id','=',$id)->get();
         $selectCiudad[0] = 'Seleccione proyecto';
         foreach ($response as $key) {
            $selectCiudad[$key->id] = $key->name;
         }
         return response()->json(array('msg'=> $selectCiudad), 200);
      }
      public function persona($id)
      {
         $response = User::where('dependencie_id','=',$id)->get();
         $selectCiudad[0] = 'Seleccione persona';
         foreach ($response as $key) {
            $selectCiudad[$key->id] = $key->name.' '.$key->lastname;
         }
         return response()->json(array('msg'=> $selectCiudad), 200);
      }
}