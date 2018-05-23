<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependency extends Model
{
    protected $table = 'dependency';
    protected $fillable = ['nameDependency'];
    protected $guarded = ['idDependency'];
    protected $primaryKey = 'idDependency';
}
