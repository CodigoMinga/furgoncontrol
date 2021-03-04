<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travelstudent extends Model
{       
    protected $fillable = ['temperature', 'enabled'];
    public function student()
    {
        return $this->belongsTo('App\student');
    }
}
