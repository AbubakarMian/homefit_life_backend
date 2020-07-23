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
            $table->bigInteger('user_id');
            $table->string('name', 50);
            $table->float('lat')->default(0);
            $table->float('long')->default(0);
            $table->tinyInteger('gender')->default(1);
            $table->BigInteger('training_type_id')->default(0);
            $table->string('specialities', 250)->nullable()->default(null);
            $table->integer('rating')->default(0);
            $table->tinyInteger('is_featured')->default(0);
            $table->string('details', 250)->nullable()->default(null);
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
