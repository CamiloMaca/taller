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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('jugador_id');
            $table->foreign('jugador_id')
                ->references('id')
                ->on('jugadors')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('presidente_id');
            $table->foreign('presidente_id')
                ->references('id')
                ->on('presidentes')
                ->onDelete('cascade');
            
            $table->string('nombre');
            $table->string('ciudad');
            $table->string('estadio');
            $table->integer('aforo');
            $table->integer('año');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
