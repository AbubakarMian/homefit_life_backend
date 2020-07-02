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
            $table->string('type', 50);
            $table->string('name', 50);
            $table->integer('trainer_id');
            $table->date('date');
            $table->time('time');
            $table->time('session_time');
            $table->integer('status')->default(3);
            $table->string('total_registered_users', 50);
            $table->rememberToken();
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
