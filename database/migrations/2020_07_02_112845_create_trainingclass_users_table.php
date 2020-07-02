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
            $table->integer('trainingclass_id')->default(2);
            $table->integer('user_id')->default(2);
            $table->tinyInteger('is_connected')->default(2);
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
        Schema::dropIfExists('trainingclass_users');
    }
}
