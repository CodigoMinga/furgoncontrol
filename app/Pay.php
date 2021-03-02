<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    public $fillable = ['ammount','user_id'];
}
