<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_meal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('meal_type')->nullable()->default('morning');
            $table->string('meal_name')->nullable()->default(null);
            $table->bigInteger('user_id')->nullable()->default(0);
            $table->double('protein')->nullable()->default(0);
            $table->double('fats')->nullable()->default(0);
            $table->double('calories')->nullable()->default(0);
            $table->double('carbohydrates')->nullable()->default(0);
            $table->bigInteger('date');
            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal');
    }
}
