<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $name
 * @property string $last_name
 * @property string $rut
 * @property string $parent_email
 * @property string $parent_name
 * @property string $parent_last_name
 * @property string $parent_rut
 * @property string $parent_phone
 * @property boolean $enabled
 * @property string $school_name
 * @property User $user
 * @property Travelstudent[] $travelstudents
 */
class Student extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'created_at', 'updated_at', 'name', 'last_name', 'rut', 'parent_email', 'parent_name', 'parent_last_name', 'parent_rut', 'parent_phone', 'enabled', 'school_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function travelstudents()
    {
        return $this->hasMany('App\Travelstudent');
    }


    public function school()
    {
        return $this->belongsTo('App\School');
    }
}
