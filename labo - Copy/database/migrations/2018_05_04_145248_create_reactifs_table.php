<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReactifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactifs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('idReactifs')->nullable();
            $table->string('designation')->nullable();
            $table->string('conditionnement')->nullable();
            $table->integer('lot')->nullable();
            $table->string('fabriquant')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reactifs');
    }
}
