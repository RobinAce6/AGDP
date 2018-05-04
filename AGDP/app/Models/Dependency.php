<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependency extends Model
{
    protected $table = 'dependencies';
    protected $fillable = ['nameDep'];
    protected $guarded = ['idDep'];
    protected $primaryKey = 'idDep';
}
