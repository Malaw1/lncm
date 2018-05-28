<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProprietesphysiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietesphysiques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tempFusion');
            $table->string('tempEbulution');
            $table->string('solubilite');
            $table->string('parametreDeSolubilite');
            $table->string('masseVolumique');
            $table->string('tempAutoInflamation');
            $table->string('pointEcart');
            $table->string('limitesExplosiviteAir');
            $table->string('pressionVapeurSaturante');
            $table->string('ViscositeDynamique');
            $table->string('pointCritique');
            $table->integer('reactifs_id')->unsigned();
            $table->foreign('reactifs_id')->references('id')->on('reactifs');
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
        Schema::dropIfExists('proprietesphysiques');
    }
}
