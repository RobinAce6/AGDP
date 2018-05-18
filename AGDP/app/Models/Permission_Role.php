<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission_Role extends Model
{
    protected $table = 'permission_roles';
    protected $fillable = ['idP','idRole'];
    protected $guarded = ['idPerRol'];
    protected $primaryKey = 'idP';

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission', 'permissions');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','roles');
    }
}
