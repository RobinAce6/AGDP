<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Permission_Role;

class Permission extends Model
{
    protected $table = 'permission';
    protected $fillable = ['namePermission'];
    protected $guarded = ['idPermission'];
    protected $primaryKey = 'idPermission';

    public function permissions_role()
    {
        return $this->hasMany(Permission_Role::class, 'permission_id','idPermission');
    }
}

