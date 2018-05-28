<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReactifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('reactifs')){
            Schema::create('reactifs', function (Blueprint $table) {
                $table->increments('id');
                $table->string('designation');
                $table->string('conditionnement');
                $table->integer('lot');
                $table->string('fabriquant');
                $table->integer('quantite');
                $table->integer('quantiteUtilise');
                $table->date('dateFab');
                $table->date('dateExp');
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
        Schema::dropIfExists('reactifs');
    }
}
