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
            $table->integer('trainer_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->float('price')->default(0);
            $table->date('class_date');
            $table->time('class_time');
            $table->integer('payment_id')->default(0);
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
