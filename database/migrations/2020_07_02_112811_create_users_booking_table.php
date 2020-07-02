<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_booking', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true)->length(20);
            $table->integer('user_id')->default(2);
            $table->integer('training_class_id')->default(2);
            $table->integer('package_id')->default(2);
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
        Schema::dropIfExists('users_booking');
    }
}
