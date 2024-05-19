<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string("nom",255);
            $table->string("prenom",255);
            $table->unsignedBigInteger("telephone_id");
            $table->unsignedBigInteger("filiere_id");
            $table->foreign("telephone_id")->references('id')->on('telephones');
            $table->foreign("filiere_id")->references('id')->on('filieres');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};
