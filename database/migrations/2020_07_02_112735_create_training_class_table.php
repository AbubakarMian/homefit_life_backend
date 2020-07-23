<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_class', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true)->length(20);
            $table->string('type', 50); // personal , group
            $table->string('name', 50);
            $table->bigInteger('trainer_id');
            $table->date('date');
            $table->time('time');
            $table->time('session_time');
            $table->string('status')->default(3);
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
        Schema::dropIfExists('training_class');
    }
}
