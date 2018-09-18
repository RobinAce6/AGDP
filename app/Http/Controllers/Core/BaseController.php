<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Log;
use App\Parameter;
use Carbon\Carbon;
use Auth;

class BaseController extends Controller
{

    public function __construct()
    {    
        $this->Log = new Log();
        $date = Carbon::now();
        if ($dateModifi = Parameter::GetParameter('dateModify')) {
            $this->dateModify = $date->addHour($dateModifi[0]->valor);
        }
        else{
            $this->dateModify = $date->addHour();
        }       
        if (is_null(Auth::user())) {
            return redirect('/');
        }else
        {
            
        }
    }
}
