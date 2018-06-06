<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\MailE;


class City extends Model
{
    protected $table 	= 'city';

	protected $fillable = 
    [
        'nameCity', 'department_id'
    ];

	protected $guarded  = ['idCity'];
    
	protected $primaryKey = 'idCity';

	public function Department()
    {
        return $this->belongsTo(Department::class, 'department_id','idDepartment');
    }

    public function MailE()
    {
        return $this->hasMany(MailE::class, 'city_id', 'idCity');
    }
} 
