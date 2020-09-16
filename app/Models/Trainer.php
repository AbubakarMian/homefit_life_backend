<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Trainer extends Model
{
    use SoftDeletes;
    protected $table = 'trainer';

    public function training_type()
    {
        return $this->hasOne('App\Models\Training_Type', 'id', 'training_type_id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

}