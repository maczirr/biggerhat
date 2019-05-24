<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrestrictedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urestricteds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('upgrade_urestricted', function(Blueprint $table) {
            $table->integer('upgrade_id')->unsigned()->index();
            $table->foreign('upgrade_id')->references('id')->on('upgrades')->onDelete('cascade');
            $table->integer('urestricted_id')->unsigned()->index();
            $table->foreign('urestricted_id')->references('id')->on('urestricteds')->onDelete('cascade');
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
        Schema::dropIfExists('upgrade_urestricted');
        Schema::dropIfExists('urestricteds');
    }
}
