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
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `INSERTAR_USUARIO`(IN `id` INT, IN `nom` VARCHAR(45), IN `identi` VARCHAR(45), IN `usu` VARCHAR(45), IN `contra` VARCHAR(45))
BEGIN 
	INSERT INTO usuario(idusuario,nombres,identificacion,usuario,contraseña) VALUES (nom,identi,usu,contra);
END");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS INSERTAR_USUARIO");
    }
};
