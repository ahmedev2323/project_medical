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
        Schema::create('receptions', function (Blueprint $table) {
            $table->id();
            $table->string('type_consult');
            $table->string('observation');
            $table->string('frais_consult'); // Use decimal for monetary values
            $table->date('date_consult'); 
            $table->foreignId('id_pat');
            $table->foreignId('id_per');
            $table->foreignId('id_doctore');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receptions');
    }
};
