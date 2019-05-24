<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('station_id')->unsigned();
            $table->integer('cost');
            $table->integer('wounds');
            $table->integer('size');
            $table->integer('base');
            $table->integer('defense');
            $table->string('defense_suit')->nullable();
            $table->integer('willpower');
            $table->string('willpower_suit')->nullable();
            $table->integer('move')->nullable();
            $table->integer('quantity');
            $table->string('aka')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('minis');
    }
}
