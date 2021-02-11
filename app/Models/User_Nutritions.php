<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_Nutritions extends Model
{
    use SoftDeletes;
    protected $table='user_nutritions';
}
