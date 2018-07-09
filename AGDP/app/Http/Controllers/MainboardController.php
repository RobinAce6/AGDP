<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role_User as RU;



class MainboardController extends Controller
{

	/*public function __construct()
	{
		$this->middleware('auth');
	}
	*/

    public function index()
    {
    	$roleuser = RU::all();

    	return view('principal', compact('roleuser'));
    }
}
