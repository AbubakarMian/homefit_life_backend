<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\NutritionDailyGoal;
use App\Models\NutritionGoal;
use App\Models\user_meal;
use App\Models\User_Nutritions;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;

class NutritionController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $user_goal = NutritionGoal::where('user_id', $user_id)->first();

        return \View('user.nutritioncalculator.index', compact('user_goal'));
    }

    public function addgoal(Request $request)
    {
        $current_time = Carbon::now(); //->timestamp;
        $current_time = strtotime($current_time->toDateString());
        $user_id = Auth::id();
        $nutrition = new NutritionDailyGoal();
        $nutrition->actively_level = $request->activity_level;
        $nutrition->current_weight = $request->current_weight;
        $nutrition->goal_weight = $request->goal_weight;
        $nutrition->calories_level = $request->calories_goal;
        $nutrition->carbohydrates = $request->carbohydrates;
        $nutrition->fats = $request->fats;
        $nutrition->proteins = $request->proteins;
        $nutrition->weekly_weight = $request->weekly_goal;
        $nutrition->user_id = $user_id;
        $nutrition->date = $current_time;
        $nutrition->save();

        $user_goal = NutritionGoal::where('user_id', $user_id)->first();
        if (!$user_goal) {
            $user_goal = new NutritionGoal();
        }

        $user_goal->actively_level = $request->activity_level;
        $user_goal->current_weight = $request->current_weight;
        $user_goal->goal_weight = $request->goal_weight;
        $user_goal->calories_level = $request->calories_goal;
        $user_goal->carbohydrates = $request->carbohydrates;
        $user_goal->fats = $request->fats;
        $user_goal->proteins = $request->proteins;
        $user_goal->weekly_weight = $request->weekly_goal;
        $user_goal->user_id = $user_id;

        $user_goal->save();

        return response()->json([
            'status' =>  true,
            'data' => $nutrition,
        ]);
    }

    public function addmeal(Request $request)
    {
        // dd($request->all());
        $current_time = Carbon::now(); //->timestamp;
        $current_time = strtotime($current_time->toDateString());
        $user_id = Auth::id();
        $meal = new user_meal();
        $meal->protein = $request->meal_protein;
        $meal->fats = $request->meal_fats;
        $meal->calories = $request->meal_cal;
        $meal->meal_name = $request->meal_name;
        $meal->meal_type = $request->meal_type;
        $meal->carbohydrates = $request->meal_carbs;
        $meal->user_id = $user_id;
        $meal->date = $current_time;
        $meal->save();

        $nutrition_goal = NutritionDailyGoal::where('user_id', $user_id)->where('date',$current_time)->first();
        $nutrition_goal->total_protein =  $nutrition_goal->total_protein + $request->meal_protein;
        $nutrition_goal->total_carbs =  $nutrition_goal->total_carbs + $request->meal_carbs;
        $nutrition_goal->total_fats =  $nutrition_goal->total_fats + $request->meal_fats;
        $nutrition_goal->save();


        if ($request->meal_type == 'breakfast') {
            $meal_tab = 'breakfast_data';
        } elseif ($request->meal_type == 'lunch') {
            $meal_tab = 'lunch_data';
        } else {
            $meal_tab = 'dinner_data';
        }

        return response()->json([
            'status' =>  true,
            'data' => $meal,
            'meal_tab' => $meal_tab
        ]);
    }

    public function nutritionCalculator(Request $request)
    {

        $current_time = Carbon::now()->timestamp;
        $user_id = Auth::id();
        $cal_nutrition = new  User_Nutritions();
        $cal_nutrition->average = $request->remaining_cal;
        $cal_nutrition->goal = $request->total_goal_cal;
        $cal_nutrition->total_consumed    = $request->consume_cal;
        $cal_nutrition->user_id    = $user_id;
        $cal_nutrition->date    = $current_time;
        $cal_nutrition->save();

        return response()->json([
            'status' =>  true,
            'data' => $cal_nutrition,
        ]);
    }
}
