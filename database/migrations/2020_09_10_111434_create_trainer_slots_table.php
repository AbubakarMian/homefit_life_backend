<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_slots', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('trainer_id');
            $table->bigInteger('week_days_id');
            $table->date('slot_start');
            $table->date('slot_end');
            $table->time('slot_duration');
            $table->tinyInteger('is_group_class')->default(0);;
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
        Schema::dropIfExists('trainer_slots');
    }
}
