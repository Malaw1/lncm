<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostestravailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('postestravails')){
        Schema::create('postestravails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->integer('unites_id')->unsigned();
            $table->foreign('unites_id')->references('id')->on('unites');
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
        Schema::dropIfExists('postestravails');
    }
}
