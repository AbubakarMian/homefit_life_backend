<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingclassUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainingclass_users', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true)->length(20);
            $table->integer('training_class_id')->default(2);
            $table->bigInteger('user_id')->default(0);
            $table->integer('total_purchased_session')->default(0);
            $table->integer('sessions_left')->default(0);
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
        Schema::dropIfExists('trainingclass_users');
    }
}
