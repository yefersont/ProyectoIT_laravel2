<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $idUsuario
 * @property string $Nombres
 * @property string $identificacion
 * @property string $Usuario
 * @property string $Contraseña
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	protected $primaryKey = 'idUsuario';
	public $timestamps = false;

	protected $fillable = [
		'Nombres',
		'identificacion',
		'Usuario',
		'Contraseña'
	];
}
