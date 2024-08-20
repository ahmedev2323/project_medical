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
        Schema::create('infermiers', function (Blueprint $table) {
            $table->id();
            $table->string('nom_infe');
            $table->string('sex');
            $table->string('age');
            $table->string('date_recrt');
            $table->string('adress');
            $table->string('email');
            $table->string('telphon');
            $table->bigInteger('id_mal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infermiers');
    }
};
