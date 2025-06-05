<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('res_id');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('serv_id');
            $table->unsignedBigInteger('zona_id');
            $table->dateTime('horario');
            $table->string('direccion', 255);
            $table->string('contacto', 100);
            $table->text('detalle')->nullable();
            $table->enum('estado', ['enviada', 'pendiente_pago', 'confirmada', 'rechazada'])->default('enviada');
            $table->timestamp('fecha_creacion')->useCurrent();

            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios')->onDelete('cascade');
            $table->foreign('serv_id')->references('serv_id')->on('servicios')->onDelete('cascade');
            $table->foreign('zona_id')->references('zona_id')->on('zonas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
