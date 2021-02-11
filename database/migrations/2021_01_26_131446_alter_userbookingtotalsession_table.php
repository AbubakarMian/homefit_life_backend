<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserbookingtotalsessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_booking', function (Blueprint $table) {
            $table->dropColumn('session_left');
            $table->dropColumn('total_sessions');
        });  
        Schema::table('trainingclass_users', function (Blueprint $table) {
            $table->bigInteger('session_left')->nullable()->default(null);
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
