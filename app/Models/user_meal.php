<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class user_meal extends Model
{
    use SoftDeletes;
    protected $table='user_meal';
}
