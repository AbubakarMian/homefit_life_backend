<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trainer_Gallery extends Model
{
    use SoftDeletes;
    protected $table='trainer_gallery';
}
