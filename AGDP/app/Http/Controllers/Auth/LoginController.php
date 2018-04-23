<?php

namespace App\Http\Controllers\Auth;

use Auth;

use App\Http\Controllers\Controller;



class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm()
    {
        return view('Auth.login');
    }

    public function login()
    {
        $credentials = $this->validate(request(), [

            'userPerson' => 'email|required|string',
            'password'   =>  'string|required|min:6'

        ]);

        if (Auth::attempt( $credentials )) 

        {
            return redirect('mainboard');
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
