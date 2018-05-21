<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class typePerson extends Model
{
    protected $table = 'typePeople';
    protected $fillable = ['nameTypePerson'];
    protected $guarded = ['idTypePerson'];
    protected $primaryKey = 'idTypePerson';

   /* public function users()
    {
         return $this->hasMany(User::class, 'typePeople','idTypePerson');
    }*/
}
