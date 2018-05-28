<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table 	= 'clients';
    protected $fillable = ['nameClient', 'consecutiveClient'];
    protected $guarded	= ['idClient'];
    protected $primaryKey = 'idClient';

    public function Client_Mail()
    {
    	return $this->hasMany(Client_Mail::class, 'client_id', 'idClient');
    }
}
