<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $table 	= 'clients';
    protected $fillable = ['nit', 'name', 'address','cod','type'];
    protected $guarded	= ['id'];								
    protected $primaryKey = 'id';
}
