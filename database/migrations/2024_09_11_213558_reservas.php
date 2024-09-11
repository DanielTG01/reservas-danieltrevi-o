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
        Schema::create('reservas', function(Blueprint $table){
            $table ->id();
            $table ->string("nombre_sala");
            $table ->date("fecha_reserva");
            $table ->integer("hora_inicio");
            $table ->integer("hora_fin");
            $table ->string("nombre_cliente");
            
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('reservas');
    }
};
