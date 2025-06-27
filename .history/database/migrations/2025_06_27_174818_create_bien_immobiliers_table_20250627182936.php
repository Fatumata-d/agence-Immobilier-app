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
        Schema::create('bien_immobiliers', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->unique();

            $table->unsignedBigInteger('type_bien_id');
            $table->foreign('type_bien_id')->references('id')->on('type_biens')->onDelete('cascade');

            $table->string('titre');
            $table->text('description');
            $table->string('adresse');
            $table->string('ville');
            $table->float('superficie');
            $table->decimal('prix', 10, 2);
            $table->boolean('statut')->default(true);
            $table->datetime('date_ajout');
            $table->string('photo');
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
        Schema::dropIfExists('biem_immobiliers');
    }
};
