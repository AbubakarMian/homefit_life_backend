<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerSlotUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_slot_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('trainer_slot_id');
            $table->bigInteger('class_date');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('week_days', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('trainer_slots', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('personal_booking', function (Blueprint $table) {
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
        Schema::dropIfExists('trainer_slot_user');
    }
}
