<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users')){
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('email')->unique();
                $table->string('password');

                $table->integer('pointage_id')->unsigned();
                $table->integer('habilitation_id')->unsigned();
                $table->integer('postestravails_id')->unsigned();

                $table->foreign('pointage_id')->references('id')->on('pointage');
                $table->foreign('habilitation_id')->references('id')->on('habilitation');
                $table->foreign('postestravails_id')->references('id')->on('postestravails');

                $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
