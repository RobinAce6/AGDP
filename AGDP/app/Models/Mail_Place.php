<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mail_Place extends Model
{
    protected $table 	= 'mail_place';
    protected $fillable = ['mail_id', 'place_id'];
    protected $guarded 	= ['nMP'];
    protected $primaryKey = 'nMP'; 
}
