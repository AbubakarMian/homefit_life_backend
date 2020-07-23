<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training_Class_Users extends Model
{

    use SoftDeletes;
    protected $table='trainingclass_users';

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
