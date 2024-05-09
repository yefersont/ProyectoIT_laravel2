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
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->integer('idVehiculo', true);
            $table->integer('tipo_vehiculo')->index('fk_tp_vehiculo_idx');
            $table->string('placa_vehiculo', 45);
            $table->string('Marca_vehiculo', 45);
            $table->string('Modelo_vehiculo', 45);
            $table->string('Color_vehiculo', 45);
            $table->integer('Cc_propietario_vehiculo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculo');
    }
};
