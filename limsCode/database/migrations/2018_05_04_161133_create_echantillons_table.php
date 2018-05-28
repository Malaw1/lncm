<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEchantillonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('echantillons', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('dateRecu');
            $table->string('nomProduit');
            $table->string('formeGalenique');
            $table->integer('quantiteRecu');
            $table->integer('quantiteLivree');
            $table->string('Fournisseur');
            $table->datetime('dateFab');
            $table->datetime('dateExp');
            $table->rememberToken('');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('echantillons');
    }
}
