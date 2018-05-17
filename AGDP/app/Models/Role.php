<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table    = 'roles';
    protected $fillable = ['nameRole'];
    protected $guarded  = ['idRole'];
    protected $primaryKey = 'idRole';

    public function permissionRole()
    {
        return $this->belongsToMany('App\Models\Permission');
    } 
}
