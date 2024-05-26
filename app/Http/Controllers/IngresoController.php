<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Http\Request;
use App\Models\Propietario;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['ingresos']=Ingreso::all();

        
        return view('ingresos.index',$datos);
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

        
        $propietario = Propietario::where('Cedula_propietario', $request->Cedula_propietario)->first();

        if ($propietario) {

            $ingreso = new Ingreso();
            $ingreso->cc_propietario = $propietario->idPropietario;

            $ingreso->save();

            return redirect('ingreso')->with('mensaje', 'Ingreso agregado con éxito!  '.$propietario -> Nombre_propietario." ".$propietario->Apellido_propietario);

        }else{

            return redirect('ingreso')->with('mensajeerror', 'El número de identificación no está registrado en el sistema.');

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
