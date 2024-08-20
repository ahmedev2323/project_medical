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
        Schema::create('maladies', function (Blueprint $table) {
            $table->id();
            $table->string('famille_malade');
            $table->string('sous_famille');
            $table->string('designation');
            $table->string('prix_traitement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maladies');
    }
};
