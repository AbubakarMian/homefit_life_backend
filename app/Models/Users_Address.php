<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Users_Address extends Model
{
    
        use SoftDeletes;
    protected $table='user_address';
}
