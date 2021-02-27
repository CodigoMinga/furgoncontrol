<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $fillable = ['name','last_name','rut','parent_email','parent_name','parent_last_name','parent_rut','parent_phone','user_id'];


}
