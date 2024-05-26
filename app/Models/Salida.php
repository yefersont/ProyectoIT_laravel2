<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Salida
 * 
 * @property int $idSalidas
 * @property int $id_Ingresos_id
 * @property Carbon $Fecha_Salida
 * @property Carbon $Hora_Salida
 * 
 * @property Ingreso $ingreso
 *
 * @package App\Models
 */
class Salida extends Model
{
	protected $table = 'salidas';
	protected $primaryKey = 'idSalidas';
	public $timestamps = true;

	const CREATED_AT = 'Hora_salida';
    const UPDATED_AT = 'Fecha_salida';
	


	protected $casts = [
		'id_Ingresos_id' => 'int',
		'Fecha_Salida' => 'date',
		'Hora_Salida' => 'datetime'
	];

	protected $fillable = [
		'id_Ingresos_id',
		'Fecha_Salida',
		'Hora_Salida'
	];

	public function ingreso()
	{
		return $this->belongsTo(Ingreso::class, 'id_Ingresos_id');
	}
}
