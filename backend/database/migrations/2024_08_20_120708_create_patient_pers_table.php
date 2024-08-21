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
        Schema::create('patient_pers', function (Blueprint $table) {
            $table->id();
            $table->string('nom_pat');
    $table->string('post_bom_pat');
    $table->string('sex_pat');
    $table->string('adresse_pat');
    $table->string('telephone_pat');
    $table->string('email_path');
    $table->string('poids_pat');
    $table->date('date_naissance_pat'); // Use date type for dates

    // Foreign keys
    $table->foreignId('id_infermier')->constrained('infermiers');
    $table->foreignId('id_malde')->constrained('maladies');
    $table->foreignId('id_doctore')->constrained('doctores');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_pers');
    }
};
