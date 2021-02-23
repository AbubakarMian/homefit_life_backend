<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trainer', function (Blueprint $table) {
            // $table->double('personal_session_price')->nullable()->default(0);
            // $table->dropColumn('training_type_id');
        });
        Schema::table('trainer_slots', function (Blueprint $table) {
            $table->bigInteger('training_class_id');
            $table->bigInteger('slot_start');
            $table->bigInteger('slot_end');
        });
        Schema::table('trainingclass_users', function (Blueprint $table) {
            $table->dropColumn('price');
        });
        Schema::table('training_session', function (Blueprint $table) {
            $table->bigInteger('training_slot_id');
            $table->dropColumn('liveUrl');
            $table->dropColumn('class_time');
            $table->dropColumn('training_class_id');
            $table->string('live_url')->nullable()->default(null);
            $table->bigInteger('slot_start');
            $table->bigInteger('slot_end');
            $table->tinyInteger('is_online')->default(0);
            $table->string('status')->nullable()->default('pending'); // pending | inprogress | completed
        });
        Schema::table('training_session_personal', function (Blueprint $table) {
            $table->bigInteger('training_slot_id');
            $table->dropColumn('class_time');
            $table->dropColumn('price');
            $table->bigInteger('slot_start');
            $table->bigInteger('slot_end');
            $table->string('live_url')->nullable()->default(null);
            $table->tinyInteger('is_online')->default(0);
            $table->string('status')->nullable()->default('pending'); // pending | inprogress | completed
       
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
