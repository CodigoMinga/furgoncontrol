<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public $fillable = ['ip','type','message'];
}
