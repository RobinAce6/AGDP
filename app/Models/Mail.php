<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Proyect;
use App\Models\State;
use App\Models\Answer;

class Mail extends Model
{
    protected $table    = 'mails';
    protected $primaryKey = 'id';

    public function Proyect()
    {
    	return $this->belongsTo(Proyect::class);
    }
    public function State()
    {
    	return $this->belongsTo(State::class);
    }
    public function Answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
