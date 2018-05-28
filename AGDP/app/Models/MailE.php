<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StorageWay;
use App\Models\Folder;
use App\Models\Edoc;
use App\Models\Dependency_Mail;
use App\Models\Mail_Place;

class MailE extends Model
{
    protected $table    = 'mailE';
    protected $fillable = [
        'idMail2', 'codEnterprise','typeMail','folder_id' ,'affair', 'dependency_id', 'creationDate', 'internalEstablishmentDate', 'receivedDate', 'storagew_id', 'obervations', 'deliveredToArchive', 'shippingWay', 'nameMessenger'
    ];   
    protected $guarded  = ['idMail'];
    protected $primaryKey = 'idMail';

    public function Folder()
    {
    	return $this->belongsTo(Folder::class, 'email_id', 'idMail');
    }

    public function StorageWay()
    {
        return $this->belongsTo(StorageWay::class, 'storagew_id', 'idStorageWay');
    }

    public function Dependency_Mail()
    {
        return $this->hasMany(Dependency_Mail::class, 'mail_id', 'idMail');
    }

    public function Edoc()
    {
        return $this->hasMany(Edoc::class, 'mail_id', 'idMail');
    }

    public function Mail_Place()
    {
        return $this->hasMany(Mail_Place::class, 'mail_id', 'idMail');
    }
}
