<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonModel extends Model
{
    protected $table = 'people';
    protected $fillable = ['nameP', 'surnameP', 'emailP','typeP'];
    protected $guarded = ['idPeo'];
    protected $primaryKey = 'idPeo';
}
