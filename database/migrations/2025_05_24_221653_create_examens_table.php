<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->string('option_1');
            $table->string('option_2');
            $table->string('option_3')->nullable();
            $table->string('option_4')->nullable();
            $table->string('bonne_reponse'); // ex : "option_1"
            $table->foreignId('cours_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('examens');
    }
};
