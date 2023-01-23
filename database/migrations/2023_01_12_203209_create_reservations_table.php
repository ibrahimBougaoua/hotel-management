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
            $table->integerIncrements("NResevation");
            $table->date("DateDebut");
            $table->date("DateFin");
            $table->date("DatePayeArrhes");
            $table->integer("MontantArrhes");
            $table->Integer("chambre_Nchambre");
            $table->unsignedInteger("clients_Codeclient");
           

            $table->foreign('chambre_Nchambre')->references('Nchambre')->on('chambres');
            $table->foreign('clients_Codeclient')->references('Codeclient')->on('clients');


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
