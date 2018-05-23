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
        'codPerson', 'namePerson', 'lastnamePerson',  'typePerson_id', 'dependency_id', 'emailPerson', 'userPerson', 'confirPassPerson'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'passwordPerson', 
    ];

    protected $primaryKey = 'idUser';   

    public $timestamps = true;
}
