<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    public $table = "travels";

    public function travelstudent(){
        return $this->hasMany('App\Travelstudent','travel_id','id');
    }
}
