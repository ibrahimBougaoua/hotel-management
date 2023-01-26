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
        Schema::create('concerner', function (Blueprint $table) {
          
            $table->id();
            $table->timestamps();

            $table->integer("consomations_id");
            $table->integer("prestations_id");

            $table->foreign('consomations_id')->references('Nconsommation')->on('consommations');
            $table->foreign('prestations_id')->references('CodePrestation')->on('prestations');
 
        });
        //
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
