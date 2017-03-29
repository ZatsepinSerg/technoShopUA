<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Description extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descriptions', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('product_id');
            $table->string('announcement_date');
            $table->string('sensors');
            $table->string('flight_mode');
            $table->string('control');
            $table->string('audio');
            $table->string('video');
            $table->string('headphone_jack');
            $table->string('camera');
            $table->string('front_camera');
            $table->string('camera_functions');
            $table->string('OS');
            $table->string('weight');
            $table->string('count_sim');
            $table->string('dimensions');
            $table->string('multiple_sim');
            $table->string('type');
            $table->string('SIM_type');
            $table->string('enclosure_type');
            $table->string('management');
            $table->string('cores_CPU');
            $table->string('internal_memory');
            $table->string('RAM');
            $table->string('CPU');
            $table->string('memory_slot');
            $table->string('battery');
            $table->string('standby_time');
            $table->string('battery_capacity');
            $table->string('talk_time');
            $table->string('battery_type');
            $table->string('charger_connector');
            $table->string('A_GPS');
            $table->string('satellite_navigation');
            $table->string('standard');
            $table->string('screen_rotation');
            $table->string('diagonal');
            $table->string('image_size');
            $table->string('touch_screen_type');
            $table->string('screen_type');
            $table->string('PPI');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descriptions');
    }
}
