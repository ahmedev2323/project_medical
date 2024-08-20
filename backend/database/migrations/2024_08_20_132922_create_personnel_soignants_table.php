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
        Schema::create('personnel_soignants', function (Blueprint $table) {
            $table->id();
            $table->string('nom_per');
    $table->string('post_no_per');
    $table->string('sex_pers');
    $table->string('garde_pers');
    $table->string('function_pers');
    $table->string('telphon_person');
    $table->string('email_pers');
    $table->string('adress_pers');
    $table->date('date_naisanse');
    $table->date('date_recutment_pers');
    
    // Foreign key
    $table->foreignId('id_servise')->constrained('services');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnel_soignants');
    }
};
