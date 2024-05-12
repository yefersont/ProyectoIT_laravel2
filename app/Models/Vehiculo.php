<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 * 
 * @property int $idVehiculo
 * @property int $tipo_vehiculo
 * @property string $placa_vehiculo
 * @property string $Marca_vehiculo
 * @property string $Modelo_vehiculo
 * @property string $Color_vehiculo
 * @property int $Cc_propietario_vehiculo
 * 
 * @property Collection|Propietario[] $propietarios
 *
 * @package App\Models
 */
class Vehiculo extends Model
{
	protected $table = 'vehiculo';
	protected $primaryKey = 'idVehiculo';
	public $timestamps = false;

	protected $casts = [
		'tipo_vehiculo' => 'int',
		'Cc_propietario_vehiculo' => 'int'
	];

	protected $fillable = [
		'tipo_vehiculo',
		'placa_vehiculo',
		'Marca_vehiculo',
		'Modelo_vehiculo',
		'Color_vehiculo',
		'Cc_propietario_vehiculo'
	];

	public function Tipodevehiculo()
	{
		return $this->belongsTo(TipoVehiculo::class, 'tipo_vehiculo');
	}

	public function propietarios()
	{
		return $this->hasMany(Propietario::class, 'propietario_placa_vehiculo');
	}
}
