<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
        use Illuminate\Database\Eloquent\SoftDeletes;

class Food_Nutritions extends Model
{
    use SoftDeletes;
        protected $table='food_nutritions';
}
