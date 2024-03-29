<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trainer_slot extends Model
{
    use SoftDeletes;
    protected $table = 'trainer_slots';


    public function training_session()
    {
        return $this->hasOne('App\Models\Training_Session', 'training_slot_id', 'id');
    }
    public function training_class()
    {
        return $this->hasOne('App\Models\Training_Class', 'id', 'training_class_id');
    }
    public function weekday()
    {
        return $this->hasOne('App\Models\Weekday', 'id', 'week_days_id');
    }
}
