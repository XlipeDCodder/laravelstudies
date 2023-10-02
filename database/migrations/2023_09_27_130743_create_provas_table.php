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
        Schema::create('provas', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->boolean('status');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('materia_id')->references('id')->on('materias');
            $table->foreignId('professor_id')->references('id')->on('professors'); 
            $table->foreignId('cursos_id')->references('id')->on('cursos');            
            $table->foreignId('instituto_id')->references('id')->on('institutos');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provas');
    }
};
