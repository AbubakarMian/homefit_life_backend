<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\NutritionDailyGoal;
use App\Models\user_meal;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;

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

    public function addmeal(Request $request){
        // dd($request->all());
        $current_time = Carbon::now()->timestamp;
        $user_id = Auth::id();
        $meal= new user_meal();
        $meal->protein =$request->meal_protein;
        $meal->fats =$request->meal_fats;
        $meal->calories =$request->meal_cal;
        $meal->meal_name =$request->meal_name;
        $meal->meal_type =$request->meal_type;
        $meal->user_id =$user_id;
        $meal->date =$current_time;
        $meal->save();

    }
}
