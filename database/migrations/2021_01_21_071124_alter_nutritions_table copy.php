<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterNutritionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_nutrition_goal', function (Blueprint $table) {
            $table->bigInteger('user_id')->nullable()->default(0);
        });
        Schema::dropIfExists('user_nutritions_consumed');
        Schema::dropIfExists('nutrition');
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
