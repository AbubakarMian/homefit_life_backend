<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingSessionPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_session_personal', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true)->length(20);
            $table->integer('trainer_id')->default(2);
            $table->integer('user_id')->default(2);
            $table->date('class_date');
            $table->time('class_time');
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
        Schema::dropIfExists('training_session_personal');
    }
}
