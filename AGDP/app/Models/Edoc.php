<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edoc extends Model
{
    protected $table    = 'edoc';
    protected $fillable = ['nameEdo','mail_id','folder_id'];
    protected $guarded  = ['idEdoc'];
    protected $primaryKey = 'idE';
}
