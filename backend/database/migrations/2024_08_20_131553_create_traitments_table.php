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
        Schema::create('traitments', function (Blueprint $table) {
            $table->id();
            $table->string('obsirvation');
            $table->date('date_debut_trait');
            $table->date('date_fain_trait');
            $table->string('etat_fin_pat');
            $table->foreignId('id_pat')->constrained('patient_pers');
            $table->foreignId('id_maladie')->constrained('maladies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traitments');
    }
};
