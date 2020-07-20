<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_item', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true)->length(20);
            $table->integer('request_id')->default(0);
            $table->integer('product_id')->default(0);
            $table->integer('unit_price')->default(0);
            $table->integer('total_price')->default(0);
            $table->string('quantity')->default(0);
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
        Schema::dropIfExists('request_item');
    }
}
