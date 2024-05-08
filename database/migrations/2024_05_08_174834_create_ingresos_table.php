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
        Schema::create('ingresos', function (Blueprint $table) {
            $table->integer('idIngresos', true);
            $table->integer('cc_propietario')->index('fk_propietario_idx');
            $table->string('placa_ingreso', 45);
            $table->date('fehca_ingreso');
            $table->dateTime('hora_ingreso');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingresos');
    }
};
