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
        return $this->hasOne('App\models\Trainer', 'id', 'trainer_id');
    }

    public function trainer_type()
    {
        return $this->hasOne('App\models\Training_Type', 'id', 'trainer_id');
    }

    public function students()
    {
        return $this->hasMany('App\models\Training_Class_Users', 'trainingclass_id', 'id');
    }
}
