<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true)->length(20);
            $table->integer('user_id')->length(20);
            $table->float('user_latitude')->default(0);
            $table->float('user_longitude')->default(0);
            $table->string('name', 50);
            $table->string('gender', 50);
            $table->BigInteger('training_type_id')->length(20)->default(0);
            $table->string('specialities', 50)->nullable()->default(null);
            $table->string('rating', 50)->nullable()->default(null);
            $table->tinyInteger('is_featured')->nullable()->default(null);
            $table->string('details', 250)->nullable()->default(null);;

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
        Schema::dropIfExists('trainer');
    }
}
