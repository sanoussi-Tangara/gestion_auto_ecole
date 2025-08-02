<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->string('modele');
            $table->string('immatriculation')->unique();
            $table->string('type'); // voiture, moto, etc.
            $table->year('annee');
            $table->string('statut')->default('disponible'); // disponible, en panne, etc.
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
