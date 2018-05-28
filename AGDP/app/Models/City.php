<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
