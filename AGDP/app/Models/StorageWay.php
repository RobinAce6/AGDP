<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StorageWay extends Model
{
    protected $table    = 'storage_ways';
    protected $fillable = ['nameSW'];
    protected $guarded  = 'idSW';
    protected $primaryKey = 'idSW';
}
