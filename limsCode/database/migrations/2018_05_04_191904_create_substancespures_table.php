<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubstancespuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('substancespures')){
            Schema::create('substancespures', function (Blueprint $table) {
                $table->increments('id');
                $table->string('designation');
                $table->string('conditionnement')->nullable();
                $table->integer('quantiteRecue')->nullable();
                $table->integer('lot')->nullable();
                $table->date('dateExp')->nullable();
                $table->date('fabricant')->nullable();
                $table->date('dateRecu')->nullable();
                $table->string('utilise')->nullable();
                $table->string('restant')->nullable();
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
        Schema::dropIfExists('substancespures');
    }
}
