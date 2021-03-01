<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property integer $commune_id
 * @property string $name
 * @property string $last_name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property boolean $is_codigo_minga
 * @property string $rut
 * @property string $phone
 * @property boolean $enabled
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property string $plate
 * @property Commune $commune
 * @property License[] $licenses
 * @property Student[] $students
 * @property Travel[] $travels
 */


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','last_name','rut','phone','commune_id','plate'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    public function commune()
    {
        return $this->belongsTo('App\Commune');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function licenses()
    {
        return $this->hasMany('App\License');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Student');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function travels()
    {
        return $this->hasMany('App\Travel');
    }

    public function schools()
    {
        return $this->hasMany('App\School');
    }
}
