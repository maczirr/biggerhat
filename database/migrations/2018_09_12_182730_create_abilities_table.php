<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abilities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('trigger_suit')->nullable();
            $table->longText('description');
            $table->timestamps();
        });

        Schema::create('abilitie_mini', function(Blueprint $table) {
            $table->integer('abilitie_id')->unsigned()->index();
            $table->foreign('abilitie_id')->references('id')->on('abilities')->onDelete('cascade');
            $table->integer('mini_id')->unsigned()->index();
            $table->foreign('mini_id')->references('id')->on('minis')->onDelete('cascade');
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
        Schema::dropIfExists('abilitie_mini');
        Schema::dropIfExists('abilities');
    }
}
