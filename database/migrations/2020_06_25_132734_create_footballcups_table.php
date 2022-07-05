<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootballcupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footballcups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('cupName');
            $table->string('image');
            $table->integer('entryFee');
            $table->string('gameName');
            $table->text('gameDescription');
            $table->mediumInteger('capacity');
            $table->mediumInteger('fPrize');
            $table->mediumInteger('sPrize');
            $table->mediumInteger('tPrize')->nullable();
            $table->mediumInteger('foPrize')->nullable();
            $table->mediumInteger('fRankPrize')->nullable();
            $table->mediumInteger('sRankPrize')->nullable();
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
        Schema::dropIfExists('footballcups');
    }
}
