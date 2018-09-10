<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Core\BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mainboard');
    }
}
