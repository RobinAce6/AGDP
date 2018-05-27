<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MailE;

class MailE extends Model
{
    protected $table    = 'mail';
    protected $fillable = ['idMail2', 'codEnterprise','affair', 'creationDate', 'internalEstablishmentDate', 'receivedDate', 'obervations', 'deliveredToArchive', 'shippingWay', 'nameMessenger', 'typeMail', 'dependency_id', 'storagew_id', 'city_id'];   
    protected $guarded  = ['idMail'];
    protected $primaryKey = 'idMail';
}
