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
        Schema::create('hotels', function (Blueprint $table) {
            $table->integerIncrements("Nhotel");
            $table->string("NomH");
            $table->string("AdresseH");
            $table->string("CPH");
            $table->integer("TelH");
            $table->timestamps();
           
            $table->integer("classes_Nbreetoile");
            $table->foreign('classes_Nbreetoile')->references('Nbreetoile')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
};
