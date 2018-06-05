<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\typePerson;
use App\Models\Dependency;
use App\Models\Folder_User;
use App\Models\Role_User;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codPerson', 'namePerson', 'lastnamePerson',  'typePerson_id', 'dependency_id', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
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
        return $this->hasMany(Role_User::class, 'user_id', 'idUser');
    }

    public function Folder_User()
    {
        return $this->hasMany(Folder_User::class, 'user_id', 'idUser');
    }

}
