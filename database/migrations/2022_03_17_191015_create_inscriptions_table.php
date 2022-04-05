<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id('id_inscription');
            $table->string('nom');
            $table->string('prénom');
            $table->string('sexe');
            $table->date('date_naissance');
            $table->string('Email');
            $table->string('cin');
            $table->unsignedBigInteger('id_ville');        
            $table->unsignedBigInteger('id_faculte');
            $table->unsignedBigInteger('id_diplome');
            $table->unsignedBigInteger('id_technologie');
            $table->foreign('id_ville')->references('id_ville')->on('villes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_faculte')->references('id_faculte')->on('facultes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_diplome')->references('id_diplome')->on('diplomes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_technologie')->references('id_technologie')->on('technologies')->onUpdate('cascade')->onDelete('cascade');
            $table->string('cv');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
