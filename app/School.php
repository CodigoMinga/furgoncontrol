<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{    
    protected $fillable = ['user_id', 'created_at', 'updated_at', 'name', 'enabled'];
}
