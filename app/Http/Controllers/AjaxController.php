<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\City;

class AjaxController extends Core\BaseController {
	
   	public function index(){
      	$msg = "This is a simple message.";
      	return response()->json(array('msg'=> $msg), 200);
   	}


   	public function ciudad()
   	{
         $id = 1;
   		$response = City::where('department_id','=',$id)->get();
         $selectCiudad[0] = '';
         foreach ($response as $key) {
            $selectCiudad[$key->id] = $key->name;
         }
   		return response()->json(array('msg'=> $selectCiudad), 200);
   	}
}