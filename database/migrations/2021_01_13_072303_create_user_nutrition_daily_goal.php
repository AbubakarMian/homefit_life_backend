<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserNutritionDailyGoal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_nutrition_daily_goal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('goal_weight')->nullable()->default(null);
            $table->string('current_weight')->nullable()->default(null);
            $table->string('weekly_weight')->nullable()->default(null);
            $table->string('actively_level')->nullable()->default(null);
            $table->string('calories_level')->nullable()->default(null);
            $table->string('carbohydrates')->nullable()->default(null);
            $table->string('fats')->nullable()->default(null);
            $table->string('proteins')->nullable()->default(null);
            $table->bigInteger('date')->nullable()->default(0);
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
        Schema::dropIfExists('user_nutrition_daily_goal');
    }
}
