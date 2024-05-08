<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `BUSCAR_USUARIO`(IN ID VARCHAR(45))
BEGIN
SELECT * FROM usuario WHERE IDENTIFICACION = ID;
END");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS BUSCAR_USUARIO");
    }
};
