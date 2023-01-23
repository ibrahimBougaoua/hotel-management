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
        Schema::create('tarifiers', function (Blueprint $table) {
            $table->integer("TarifUnitaire");
            $table->unsignedInteger("categorie_CodeCategorie");
            $table->integer("classes_Nbreetoile");
            
            $table->foreign('classes_Nbreetoile')->references('Nbreetoile')->on('classes');
            $table->foreign('categorie_CodeCategorie')->references('CodeCategorie')->on('categories');
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
        Schema::dropIfExists('tarifiers');
    }
};
