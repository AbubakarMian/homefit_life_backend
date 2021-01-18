<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\NutritionDailyGoal;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class NutritionController extends Controller
{
    public function index()
    {

        return \View('user.nutritioncalculator.index');
    }

    public function addgoal(Request $request)
    {
        $nutrition = new NutritionDailyGoal();
        $nutrition->actively_level = $request->activity_level;
        $nutrition->current_weight = $request->current_weight;
        $nutrition->goal_weight = $request->goal_weight;
        $nutrition->calories_level = $request->calories_goal;
        $nutrition->carbohydrates = $request->carbohydrates;
        $nutrition->fats = $request->fats;
        $nutrition->proteins = $request->proteins;
        $nutrition->weekly_weight = $request->weekly_goal;
        $nutrition->save();

        return response()->json([
            'status' =>  true,
            'data' => $nutrition,
        ]);
    }
}
