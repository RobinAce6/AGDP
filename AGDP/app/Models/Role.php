<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Permission;

class Role extends Model
{
    protected $table    = 'role';
    protected $fillable = ['nameRole'];
    protected $guarded  = ['idRole'];
    protected $primaryKey = 'idRole';

    public function Role_User()
    {
        return $this->belongsTo(User::class, 'role_id', 'idRole');
    } 

    public function Permission_Role()
    {
        return $this->hasMany(Permission::class, 'role_id', 'idRole');
    }
}
