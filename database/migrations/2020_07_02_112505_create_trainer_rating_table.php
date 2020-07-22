<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_rating', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true)->length(20);
            $table->integer('trainer_id')->default(2);
            $table->integer('user_id')->default(2);
            $table->float('rating')->default(2);
            $table->integer('trainer_session_schedule_users_id')->default(2);
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
        Schema::dropIfExists('trainer_rating');
    }
}
