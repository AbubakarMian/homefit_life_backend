<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NutritionDailyGoal extends Model
{
    use SoftDeletes;
    protected $table='user_nutrition_daily_goal';
}
