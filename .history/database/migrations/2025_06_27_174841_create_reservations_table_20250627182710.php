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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

    $table->unsignedBigInteger('bien_immobilier_id');
    $table->foreign('bien_immobilier_id')->references('id')->on('bien_immobiliers')->onDelete('cascade');

    $table->unsignedBigInteger('agent_id');
    $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
            $table->string('Message')->unique();
            $table->datetime('date_reservation');
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
        Schema::dropIfExists('reservations');
    }
};
