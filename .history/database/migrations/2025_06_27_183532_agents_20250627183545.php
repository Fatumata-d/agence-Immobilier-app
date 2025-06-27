<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table->string('prenom');
            $table->string('nom');
            $table->string('telephone');
            $table->string('adresse');
            $table->string('email')->unique();
            $table->datetime('date_embauche');
            $table->boolean('statut');

            $table->unsignedBigInteger('administrateur_id');
            $table->foreign('administrateur_id')->references('id')->on('administrateurs')->onDelete('cascade');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
