<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission_Role extends Model
{
    protected $table = 'permission_role';
    protected $fillable = ['role_id','permission_id'];
    protected $guarded = ['nPR'];
    protected $primaryKey = 'nPR';

    public function Permissions()
    {
        return $this->belongsTo(Permission::class, 'permission_id','idPermission');
    }

    public function Roles()
    {
        return $this->belongsToMany(Role::class,'permissionRole', 'idRole');
    }
}
