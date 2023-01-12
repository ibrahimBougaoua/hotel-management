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
        Schema::create('clients', function (Blueprint $table) {
            $table->integerIncrements("Codeclient");
            $table->string("Nom");
            $table->string("Prenom");
            $table->string("Adresse");
            $table->string("Ville");
            $table->string("CP");
            $table->string("Pays");
            $table->integer("Tel");
            $table->string("Email");
            
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
        Schema::dropIfExists('clients');
    }
};
