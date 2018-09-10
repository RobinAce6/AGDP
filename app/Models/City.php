<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\MailE;


class City extends Model
{
    protected $table 	= 'cities';

	protected $fillable = 
    [
        'name', 'department_id'
    ];

	protected $guarded  = ['id'];
    
	protected $primaryKey = 'id';

	public function Department()
    {
        return $this->belongsTo(Department::class, 'department_id','id');
    }
    /*
    public function MailE()
    {
        return $this->hasMany(MailE::class, 'city_id', 'id');
    }
    */
} 
