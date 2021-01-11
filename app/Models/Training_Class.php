<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Training_Class extends Model
{
    
    use SoftDeletes;
    protected $table='training_class';

    public function trainer()
    {
        return $this->hasOne('App\Models\Trainer', 'id', 'trainer_id');
    }

    public function trainer_type()
    {
        return $this->hasOne('App\Models\Training_Type', 'id', 'trainer_id');
    }

    public function students()
    {
        return $this->hasMany('App\Models\Training_Class_Users', 'training_class_id', 'id');
    }
    public function user()
    {
        return $this->hasMany('App\user', 'user_id', 'id');
    }

    public function training_session()
    {
        return $this->hasOne('App\models\Training_Session', 'training_class_id', 'id');
    }
    public function training_slot()
    {
        return $this->hasOne('App\models\Trainer_slot', 'training_class_id', 'id');
    }
}
