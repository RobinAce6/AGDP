<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
* Este modelo se encarga de gestionar la tabla parameters de la base de datos
*/

class Parameter extends Model
{

    /*
    * RETORNA PARAMETROS DE ACUERDO A EL CLIENT_ID
    */

    public static function GetParameter($value,$client_id = null)
    {
    	if (!is_null($client_id)) {
    		$entity = Parameter::where('name','=',$value)->where('client_id','=',$client_id)->get();
    	}
    	else
    	{
    		$entity = Parameter::where('name','=',$value)->get();
    	}
    	return $entity;
    }
}
