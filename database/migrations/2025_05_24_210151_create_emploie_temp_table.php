<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('emploie_temp', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // exemple : 'cours', 'examen', etc.
            $table->dateTime('date_heure_debut');
            $table->dateTime('date_heure_fin');

            // Clés étrangères
            $table->foreignId('eleve_id')->constrained('eleves')->onDelete('cascade');
            $table->foreignId('moniteur_id')->constrained('moniteurs')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('emploie_temp');
    }
};
