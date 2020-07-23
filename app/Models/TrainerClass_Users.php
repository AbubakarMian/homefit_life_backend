<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainerClass_Users extends Model
{
    use SoftDeletes;
    protected $table='trainerclass_users';
}
