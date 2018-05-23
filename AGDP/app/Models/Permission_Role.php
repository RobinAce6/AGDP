<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;

class Permission_Role extends Model
{
    protected $table = 'permission_roles';
    protected $fillable = ['permissions','idRole'];
    protected $guarded = ['idPerRol'];
    protected $primaryKey = 'idPerRol';

    /*public function permissions()
    {
        return $this->belongsTo(Permission::class, 'permissions','idP');
    }*/

    /*public function roles()
    {
        return $this->belongsToMany('App\Models\Role','roles');
    }*/
}
