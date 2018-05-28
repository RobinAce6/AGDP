<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'codPerson'      => 'required|string',
            'namePerson'     => 'required|string',
            'lastnamePerson' => 'required|string',
            'emailPerson'    => 'required|string|email|unique:users',
            'typePerson_id'  => 'required|string',
            'dependency_id'  => 'required|string',
            'userPerson'     => 'required|string',
            'passwordPerson' => 'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'codPerson'      => $data['codPerson'],,
            'namePerson'     => $data['namePerson'],
            'lastnamePerson' => $data['lastnamePerson'],
            'emailPerson'    => $data['emailPerson'],
            'typePerson_id'  => $data['typePerson_id'],
            'dependency_id'  => $data['dependency_id'],
            'userPerson'     => $data['emailPerson'],
            'passwordPerson' => bcrypt($data['codPerson']),
        ]);
    }
}
