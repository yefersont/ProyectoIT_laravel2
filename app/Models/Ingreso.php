<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingreso
 * 
 * @property int $idIngresos
 * @property int $cc_propietario
 * @property string $placa_ingreso
 * @property Carbon $fehca_ingreso
 * @property Carbon $hora_ingreso
 * 
 * @property Propietario $propietario
 * @property Collection|Salida[] $salidas
 *
 * @package App\Models
 */
class Ingreso extends Model
{
	protected $table = 'ingresos';
	protected $primaryKey = 'idIngresos';
	public $timestamps = false;

	protected $casts = [
		'cc_propietario' => 'int',
		'fehca_ingreso' => 'datetime',
		'hora_ingreso' => 'datetime'
	];

	protected $fillable = [
		'cc_propietario',
		'placa_ingreso',
		'fehca_ingreso',
		'hora_ingreso'
	];

	public function propietario()
	{
		return $this->belongsTo(Propietario::class, 'cc_propietario');
	}

	public function salidas()
	{
		return $this->hasMany(Salida::class, 'id_Ingresos_id');
	}
}
