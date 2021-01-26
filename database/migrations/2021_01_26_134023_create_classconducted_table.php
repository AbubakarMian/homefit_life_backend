<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassconductedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classconducted', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('trainer_slot_id')->nullable()->default(0);
            $table->bigInteger('class_date')->nullable()->default(0);
            $table->bigInteger('training_class_user_id')->nullable()->default(0);
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
        Schema::dropIfExists('classconducted');
    }
}
