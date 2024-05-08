<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Propietario
 * 
 * @property int $idPropietario
 * @property int $Cedula_propietario
 * @property string $Nombre_propietario
 * @property string $Apellido_propietario
 * @property string $telefono_propietario
 * @property int $propietario_placa_vehiculo
 * @property int $Rol
 * 
 * @property Rol $rol
 * @property Vehiculo $vehiculo
 * @property Collection|Ingreso[] $ingresos
 *
 * @package App\Models
 */
class Propietario extends Model
{
	protected $table = 'propietario';
	protected $primaryKey = 'idPropietario';
	public $timestamps = false;

	protected $casts = [
		'Cedula_propietario' => 'int',
		'propietario_placa_vehiculo' => 'int',
		'Rol' => 'int'
	];

	protected $fillable = [
		'Cedula_propietario',
		'Nombre_propietario',
		'Apellido_propietario',
		'telefono_propietario',
		'propietario_placa_vehiculo',
		'Rol'
	];

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'Rol');
	}

	public function vehiculo()
	{
		return $this->belongsTo(Vehiculo::class, 'propietario_placa_vehiculo');
	}

	public function ingresos()
	{
		return $this->hasMany(Ingreso::class, 'cc_propietario');
	}
}
