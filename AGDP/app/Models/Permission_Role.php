<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission_Role extends Model
{
    protected $table = 'permission_roles';
    protected $fillable = ['idP','idRole'];
    protected $guarded = ['idPerRol'];

    public function permissions()
    {
        return $this->belongsTo('App\Models\Permission');
    }

    public function roles()
    {
        return $this->belongsTo('App\Models\Role');
    }
}
