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
        Schema::create('propietario', function (Blueprint $table) {
            $table->integer('idPropietario', true);
            $table->integer('Cedula_propietario');
            $table->string('Nombre_propietario', 45);
            $table->string('Apellido_propietario', 45);
            $table->string('telefono_propietario', 45);
            $table->integer('propietario_placa_vehiculo')->index('fk_vehiculo_idx');
            $table->integer('Rol')->index('fk_rol_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propietario');
    }
};
