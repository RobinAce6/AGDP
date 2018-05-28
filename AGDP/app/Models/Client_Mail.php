<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client_Mail extends Model
{
    protected $table 	= 'client_mail';
    protected $fillable = ['client_id', 'mail_id'];
    protected $guarded 	= ['nCM'];
    protected $primaryKey = 'nCM';

    public function Client()
    {
    	return $this->belongsTo(Clients::class, 'client_id', 'idClient');
    }

    public function Mail()
    {
    	return $this->belongsTo(Mail::class, 'mail_id', 'idMail');
    }
}

