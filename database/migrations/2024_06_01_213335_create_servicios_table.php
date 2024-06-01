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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_recepcion');
            $table->text('descripcion_problema');
            $table->enum('estado_servicio', ['Recibido', 'En Reparación', 'Finalizado', 'Entregado']);
            $table->text('diagnostico')->nullable();
            $table->text('solucion')->nullable();
            $table->foreignId('id_equipo')->constrained('equipos');
            $table->foreignId('id_cliente')->constrained('clientes');
            $table->foreignId('id_tecnico')->constrained('tecnicos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
