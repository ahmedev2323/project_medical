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
        Schema::create('hospitalisations', function (Blueprint $table) {
            $table->id();
            $table->date('date_arriv');
            $table->date('date_sort');
            $table->string('observation');
            $table->foreignId('id_pat')->constrained('patient_pers');
            $table->foreignId('id_chambre')->constrained('chambres');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitalisations');
    }
};
