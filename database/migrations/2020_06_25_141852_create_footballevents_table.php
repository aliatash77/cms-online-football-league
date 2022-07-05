<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootballeventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footballevents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId');
            $table->string('userName');
            $table->mediumInteger('cupId');
            $table->string('eventKey');
            $table->mediumInteger('number');
            $table->mediumInteger('capacity');
            $table->mediumInteger('startPoint');
            $table->mediumInteger('endPoint');
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
        Schema::dropIfExists('footballevents');
    }
}
