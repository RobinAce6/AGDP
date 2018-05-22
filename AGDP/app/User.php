<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codPerson', 'namePerson', 'lastnamePerson', 'emailPerson', 'typePerson_id', 'dependency_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'passwordPerson', 'remember_token',
    ];

    protected $primaryKey = 'idUser';   

    public $timestamps = true;
}
