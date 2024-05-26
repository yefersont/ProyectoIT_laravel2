<?php

namespace App\Http\Controllers;

use App\Models\Salida;
use Illuminate\Http\Request;
use App\Models\Ingreso;
use App\Models\Propietario;
use Illuminate\Support\Carbon;

class SalidasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['salidas']=Salida::all();
        return view('salidas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */ 
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Buscar el propietario correspondiente por Cedula_propietario
    $propietario = Propietario::where('Cedula_propietario', $request->Cedula_propietario)->first();

    if (!$propietario) {
        return redirect('salidas')->with('mensajeerror', 'Propietario no encontrado.');
    }

    // Contar el número de ingresos y salidas para este propietario
    $numIngresos = Ingreso::where('cc_propietario', $propietario->idPropietario)->count();
    $numSalidas = Salida::whereHas('ingreso', function ($query) use ($propietario) {
        $query->where('cc_propietario', $propietario->idPropietario);
    })->count();

    // Verificar que el número de salidas no sea mayor o igual al número de ingresos
    if ($numSalidas >= $numIngresos) {
        return redirect('salidas')->with('mensajeerror', 'No se pueden registrar más salidas que ingresos.');
    }

    // Buscar el último ingreso correspondiente por idPropietario
    $ingreso = Ingreso::where('cc_propietario', $propietario->idPropietario)->latest()->first();

    if ($ingreso) {
        // Crear una nueva salida   
        $salida = new Salida();
        $salida->id_Ingresos_id = $ingreso->idIngresos;
        $salida->save();

        return redirect('salidas')->with('mensaje', 'Salida registrada con éxito!');
    } else {
        return redirect('salidas')->with('mensajeerror', 'No se encontró un ingreso correspondiente para el propietario proporcionado.');
    }
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
