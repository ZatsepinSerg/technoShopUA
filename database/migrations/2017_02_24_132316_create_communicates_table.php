<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunicatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communicates', function (Blueprint $table) {
            $table->string('location');
            $table->text('googlLocation');
            $table->text('workingHours');
            $table->string('telephone');
            $table->text('details');
            $table->timestamps();
        });
        Schema::create('communicate_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('email');
            $table->text('body');
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
        Schema::dropIfExists('communicates');
        Schema::dropIfExists('communicatesList');
    }
}
