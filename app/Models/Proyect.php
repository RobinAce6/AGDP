<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Proyect extends Model
{
    protected $table    = 'proyects';
    protected $fillable = ['name','client_id','cod'];   
    protected $guarded  = ['id'];
    protected $primaryKey = 'id';

    public function Client()
    {
        return $this->belongsTo(Client::class);
    }
}
