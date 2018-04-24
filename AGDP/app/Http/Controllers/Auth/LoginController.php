<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Auth;



class LoginController extends Controller
{

    /*public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }*/

    public function login()
    {
        $credentials = $this->validate(request(), [

            'userPerson' => 'email|required|string',
            'password'   =>  'string|required|min:6'

        ]);

        if (Auth::attempt( $credentials )) 

        {
            return redirect()->route('mainboard');
        }

            return back()
            ->withErrors(['userPerson' => 'Usuario y/o Contraseña Incorrectos'])
            ->withInput(request(['userPerson']));
    }

    public function logout () 
    {
        Auth::logout();

        return redirect('/');
    }
}
