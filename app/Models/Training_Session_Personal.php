<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training_Session_Personal extends Model
{
    use SoftDeletes;
    protected $table = 'training_session_personal';

    public function trainer()
    {
        return $this->hasOne('App\Models\Trainer', 'id', 'trainer_id');
    }
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function payments()
    {
        return $this->hasOne('App\Models\Payment', 'id', 'payment_id');
    }
    public function package()
    {
        return $this->hasOne('App\Models\Package', 'id', 'package_id');
    }
}
