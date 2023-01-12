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
        Schema::create('chambres', function (Blueprint $table) {
            $table->integer("Nchambre");
            $table->integer("TelCh");
            $table->unsignedInteger("categorie_CodeCategorie");
            $table->unsignedInteger("hotel_Nhotel");

            $table->foreign('categorie_CodeCategorie')->references('CodeCategorie')->on('categories');
            $table->foreign('hotel_Nhotel')->references('hotels')->on('Nhotel');
            $table->primary('Nchambre');
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
        Schema::dropIfExists('chambres');
    }
};
