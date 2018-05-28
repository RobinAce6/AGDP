<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table 	= 'department';
	protected $fillable = ['nameDepartment','department_id'];
	protected $guarded  = ['idDepartment'];
	protected $primaryKey = 'idDepartment';

	public function City()
	{
		return $this->hasMany(City::class,'department_id','idDepartment');
	}
}
