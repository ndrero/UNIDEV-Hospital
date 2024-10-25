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
        Schema::create('medicos_especialidades', function (Blueprint $table) {
            $table->foreignId('medicos_id')->constrained('medicos')->onDelete('cascade');
            $table->foreignId('especialidades_id')->constrained('especialidades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos_especialidades');
    }
};
