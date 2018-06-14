<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Permission_Role;

class Permission extends Model
{
    protected $table = 'permission';
    protected $fillable = ['namePermission','description'];
    protected $guarded = ['idPermission'];
    protected $primaryKey = 'idPermission';

    public function Permissions_Role()
    {
        return $this->hasMany(Permission_Role::class, 'permission_id','idPermission');
    }

    public function role()
    {
    	return $this->belongsToMany('App\Models\Role', 'Permission_Role');
    }
}

