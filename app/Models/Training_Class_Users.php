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
//    public function trainer()
//    {
//        return $this->hasOne('App\Models\Trainer', 'id', 'trainer_id');
//    }

    public function trainingclass()
    {
       return $this->hasOne('App\Models\Training_class', 'id', 'training_class_id');
    }

    public function packages()
    {
       return $this->hasOne('App\Models\Package', 'id', 'package_id');
    }

    public function payments()
    {
       return $this->hasOne('App\Models\Package', 'id', 'payment_id');
    }
}
