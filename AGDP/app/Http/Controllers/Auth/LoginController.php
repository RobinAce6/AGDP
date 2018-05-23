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

            'emailPerson' => 'email|required|string',
            'passwordPerson'   =>  'alphaNum|required|min:6'

        ]);

        if (Auth::attempt( $credentials )) 

        {
            return redirect()->route('mainboard');
        }
            return back()
            ->withErrors(['emailPerson' => 'Usuario y/o Contraseña Incorrectos'])
            ->withInput(request(['emailPerson']));
    }

    public function logout () 
    {
        Auth::logout();

        return redirect('/');
    }
}
