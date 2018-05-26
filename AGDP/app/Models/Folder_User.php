<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder_User extends Model
{
    protected $table    = 'folder_user';
    protected $fillable = ['user_id','folder_id'];
    protected $guarded  = ['nFU'];
    protected $primaryKey = 'nFU';
}
