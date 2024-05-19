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
        Schema::create('module_stagiaire', function (Blueprint $table) {
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('stagiaire_id');
            $table->primary(['module_id','stagiaire_id']);
            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('module_stagiaire');
    }
};
