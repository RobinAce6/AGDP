<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class City extends Model
{
    protected $table 	= 'city';
	protected $fillable = ['nameCity', 'department_id'];
	protected $guarded  = ['idCity'];
	protected $primaryKey = 'idCity';

	public function Department()
    {
        return $this->belongsTo(Department::class, 'department_id','idDepartment');
    }

    public function Mail_Place()
    {
        return $this->hasMany(Mail_Place::class, 'place_id', 'idCity');
    }
}
