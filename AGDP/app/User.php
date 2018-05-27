<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\typePerson;
use App\Models\Dependency;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codPerson', 'namePerson', 'lastnamePerson',  'typePerson_id', 'dependency_id', 'emailPerson', 'userPerson'
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


    public function TypePerson()
    {
        return $this->belongsTo(typePerson::class, 'typePerson_id','idTypePerson');
    } 

    public function Dependency()
    {
        return $this->belongsTo(Dependency::class,'dependency_id','idDependency');
    } 

    public function Role_User()
    {
        return $this->belongsTo(User::class, 'user_id', 'idUser');
    }

}
