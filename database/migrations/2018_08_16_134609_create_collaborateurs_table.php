<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaborateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_collaborateur');
            $table->string('prenom_collaborateur');
            $table->date('date_naissance');
            $table->integer('numero_telephone');
            $table->string('e_mail');
            $table->date('date_entree');
            $table->date('date_sortie')->nullable(true);
            $table->integer('nombre_annee_experience_hors_sqli');
            $table->integer('poste_id')->unsigned();
            $table->integer('projet_id')->unsigned();
            $table->foreign('poste_id')->references('id')->on('postes');
            $table->foreign('projet_id')->references('id')->on('projets');
                   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborateurs');
    }
}
