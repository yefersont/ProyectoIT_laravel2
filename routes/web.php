<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\SalidasController;
use App\Http\Controllers\ReportesController;

use App\Models\Propietario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('vehiculos',VehiculoController::class);

Route::resource('propietario',PropietarioController::class);

Route::resource('ingreso',IngresoController::class);

Route::resource('salidas',SalidasController::class);

Route::resource('reportes',ReportesController::class);





    