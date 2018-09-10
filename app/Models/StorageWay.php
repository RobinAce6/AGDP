<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MailE;

class StorageWay extends Model
{
    protected $table    = 'storage_ways';
    protected $fillable = ['name'];
    protected $guarded  = 'id';
    protected $primaryKey = 'id';
    /*
    public function MailE()
    {
		return $this->hasMany(MailE::class, 'storagew_id', 'idStorageWay');
    }
    */
}
