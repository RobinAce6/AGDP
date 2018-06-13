<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Role_User;
use App\Models\Permission_Role;

class Role extends Model
{
    protected $table    = 'role';
    protected $fillable = ['nameRole', 'description'];
    protected $guarded  = ['idRole'];
    protected $primaryKey = 'idRole';

    public function Role_User()
    {
        return $this->hasMany(Role_User::class, 'role_id', 'idRole');
    } 

    public function Permission_Role()
    {
        return $this->hasMany(Permission_Role::class, 'role_id', 'idRole');
    }

}
