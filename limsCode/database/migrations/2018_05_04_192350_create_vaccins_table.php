<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('vaccins')){
            Schema::create('vaccins', function (Blueprint $table) {
                $table->increments('id');
                $table->date('dateRecu');
                $table->string('numEnreg');
                $table->string('nomProduit');
                $table->string('dosage');
                $table->string('formePharceutique');
                $table->integer('quantite');
                $table->string('fabriquant');
                $table->date('dateExp');
                $table->integer('lot');
                $table->string('donneurOrdre');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccins');
    }
}
