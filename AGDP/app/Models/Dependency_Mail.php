<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mail_Dependency extends Model
{
    protected $table 	= 'mail_dependency';
    protected $fillable = ['mail_id', 'dependency_id'];
    protected $guarded 	= ['nMD'];
    protected $primaryKey = 'nMD';
}
