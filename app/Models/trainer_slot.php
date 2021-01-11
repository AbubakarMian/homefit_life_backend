<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trainer_slot extends Model
{
    use SoftDeletes;
    protected $table='trainer_slots';


    public function training_session()
    {
        return $this->hasOne('App\models\Training_Session', 'training_slot_id', 'id');
    }
}
