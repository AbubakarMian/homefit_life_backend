<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training_Session extends Model
{
    use SoftDeletes;
    protected $table='training_session';


    public function training_class()
    {
        return $this->hasOne('App\models\Training_Class', 'id', 'training_class_id');
    }

}


