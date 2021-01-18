<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserNutritionGoal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_nutrition_goal', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('goal_weight');
            $table->string('current_weight');
            $table->string('weekly_weight');
            $table->string('actively_level');
            $table->string('calories_level');
            $table->string('carbohydrates');
            $table->string('fats');
            $table->string('proteins');
            $table->bigInteger('date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_nutrition_goal');
    }
}
