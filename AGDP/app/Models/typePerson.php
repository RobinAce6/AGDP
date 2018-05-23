<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class typePerson extends Model
{
    protected $table = 'typePerson';
    protected $fillable = ['nameTypePerson'];
    protected $guarded = ['idTypePerson'];
    protected $primaryKey = 'idTypePerson';

}
