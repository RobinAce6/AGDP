<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Dependency_Mail;

class Dependency extends Model
{
    protected $table = 'dependencies';
    protected $fillable = ['name']; 
    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public function UserDependenci($id)
    {
        return User::where('dependencie_id','=',$id)->get();
    }
    /*
	public function Dependency_Mail()
    {
        return $this->hasMany(Dependency_Mail::class, 'dependency_id', 'idDependency');
    }

    public function mail()
    {
        return $this->belongsToMany(MailE::class,'Dependency_Mail ','dpendency_id','mail_id');
    } 
    */
}
