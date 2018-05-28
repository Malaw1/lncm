<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsiderationstherapeutiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('considerationstherapeutiques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('classeTherapeutique');
            $table->string('voieAdministration');
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
        Schema::dropIfExists('considerationstherapeutiques');
    }
}
