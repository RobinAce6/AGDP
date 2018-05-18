<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $fillable = ['namePer', 'tag'];
    protected $guarded = ['idP'];
    protected $primaryKey = 'idP';

    public function permissionRoles()
    {
        return $this->belongsToMany('App\Models\Permission_Role', 'permissionRole','idRole', 'idP');
    }
}

