<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Training_Class extends Model
{
    
    use SoftDeletes;
    protected $table='training_class';
}
