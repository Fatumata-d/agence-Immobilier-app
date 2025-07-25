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
        Schema::table('bien_immobiliers', function (Blueprint $table) {
             $table->string('statut')->default('disponible')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bien_immobiliers', function (Blueprint $table) {
             $table->string('statut')->default('disponible')->change();
        });
    }
};
