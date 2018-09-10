<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class Department extends Model
{
    protected $table 	= 'departments';
	protected $fillable = ['name'];
	protected $guarded  = ['id'];
	protected $primaryKey = 'id';

	public function City()
	{
		return $this->hasMany(City::class,'department_id','id');
	}
}
