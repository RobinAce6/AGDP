<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailE extends Model
{
    protected $table    = 'mail';
    protected $fillable = ['idMail2', 'codEnterprise','affair', 'creationDate', 'internalEstablishmentDate', 'receivedDate', 'obervations', 'deliveredToArchive', 'shippingWay', 'nameMessenger', 'typeMail', 'dependency_id', 'storagew_id', 'city_id'];   
    protected $guarded  = ['idMail'];
    protected $primaryKey = 'idMail';

    public function Client_Mail()
    {
    	return $this->hasMany(Client_Mail::class, 'mail_id', 'idMail');
    }
}
