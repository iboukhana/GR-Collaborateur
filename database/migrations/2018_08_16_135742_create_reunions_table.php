<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReunionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reunions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->dateTime('date_prevue');
            $table->dateTime('date_planifiee')->nullable(true);
            $table->dateTime('date_replanification')->nullable(true);
            $table->string('raison_replanification')->nullable(true);
            $table->integer('collaborateur_id')->unsigned();
            $table->foreign('collaborateur_id')->references('id')->on('collaborateurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reunions');
    }
}
