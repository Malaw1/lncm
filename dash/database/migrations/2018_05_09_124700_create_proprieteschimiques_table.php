<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProprieteschimiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprieteschimiques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('formuleBrule');
            $table->string('momentDipolaire');
            $table->string('diametreMoleculaire');
            $table->string('masseMolaire');
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
        Schema::dropIfExists('proprieteschimiques');
    }
}
