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
        Schema::create('offres', function (Blueprint $table) {
            $table->integer("PrixPrestation");
            $table->unsignedInteger("hotels_Nhotel");
            $table->unsignedInteger("prestations_CodePrestation");

            $table->foreign('hotels_Nhotel')->references('Nhotel')->on('hotels');
            $table->foreign('prestations_CodePrestation')->references('CodePrestation')->on('prestations');
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
        Schema::dropIfExists('offres');
    }
};
