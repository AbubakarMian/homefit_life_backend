<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_booking', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('trainer_slot_id');
            $table->bigInteger('payment_id');
            $table->bigInteger('user_id');
            $table->date('class_date');
            $table->string('status',50)->nullable()->default('pending');
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
        Schema::dropIfExists('personal_booking');
    }
}
