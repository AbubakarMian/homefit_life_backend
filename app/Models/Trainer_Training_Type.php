<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trainer_Training_Type extends Model
{
    use SoftDeletes;
    protected $table='trainer_training_types';
}