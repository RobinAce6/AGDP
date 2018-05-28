<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MailE;
use App\Models\Folder_User;
use App\Models\Clients;

class Folder extends Model
{
    protected $table    = 'folder';
    protected $fillable = ['nameFolder', 'client_id'];   
    protected $guarded  = ['idFolder'];
    protected $primaryKey = 'idFolder';

    public function Mail()
    {
    	return $this->hasMany(MailE::class, 'client_id', 'idClient');
    }

    public function Folder_User()
    {
        return $this->hasMany(Folder_User::class, 'folder_id', 'idFolder');
    }

    public function Client()
    {
        return $this->belongsTo(Clients::class, 'client_id', 'idClient');
    }
}
