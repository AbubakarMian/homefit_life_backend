<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users_Booking extends Model
{
    use SoftDeletes;
    protected $table = 'users_booking';


    public function trainingclass()
    {
        return $this->hasOne('App\Models\Training_Class', 'id', 'training_class_id');
    }
    function payment()
    {
        return $this->hasOne('App\Models\Payment', 'id', 'payment_id');
    }
    public function package()
    {
        return $this->hasOne('App\Models\Package', 'id', 'package_id');
    }
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
