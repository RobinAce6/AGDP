<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Permission_Role;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $fillable = ['namePer', 'tag'];
    protected $guarded = ['idP'];
    protected $primaryKey = 'idP';

   /* public function permissions_role()
    {
        return $this->hasMany(Permission_Role::class, 'permissions','idP');
    }*/
}

