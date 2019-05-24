<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUspecialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uspecials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('upgrade_uspecial', function(Blueprint $table) {
            $table->integer('upgrade_id')->unsigned()->index();
            $table->foreign('upgrade_id')->references('id')->on('upgrades')->onDelete('cascade');
            $table->integer('uspecial_id')->unsigned()->index();
            $table->foreign('uspecial_id')->references('id')->on('uspecials')->onDelete('cascade');
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
        Schema::dropIfExists('upgrade_uspecial');
        Schema::dropIfExists('uspecials');
    }
}
