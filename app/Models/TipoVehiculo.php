<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoVehiculo
 * 
 * @property int $idTipo_vehiculo
 * @property string $tp_vehiculo_tp
 * 
 * @property Collection|Vehiculo[] $vehiculos
 *
 * @package App\Models
 */
class TipoVehiculo extends Model
{
	protected $table = 'tipo_vehiculo';
	protected $primaryKey = 'idTipo_vehiculo';
	public $timestamps = false;

	protected $fillable = [
		'tp_vehiculo_tp'
	];

	public function vehiculos()
	{
		return $this->hasMany(Vehiculo::class, 'tipo_vehiculo');
	}
}
