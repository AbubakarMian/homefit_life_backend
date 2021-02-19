<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassConduct extends Model
{
    use SoftDeletes; 
    protected $table="classconducted";
}
