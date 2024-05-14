<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['vehiculos']=Vehiculo::all();
        return view('vehiculo.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $vehiculo['vehiculos'] = Vehiculo::all();
        return view('vehiculo.create',$vehiculo);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $datosvehiculo = request()->except('_token');
        Vehiculo::insert($datosvehiculo);
        return redirect('vehiculos')->with('mensaje',' Vehículo agregado con éxito.');

        
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
        $vehiculo = Vehiculo::findOrFail($id);
        return view('vehiculo.edit', compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datosvehiculo = request()->except(['_token','_method']);
        Vehiculo::where('idVehiculo','=',$id) -> update($datosvehiculo);
        
        return redirect('vehiculos')->with('mensaje',' El vehículo ha sido actualizado con éxito. '); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        Vehiculo::destroy($id);
        return redirect('vehiculos')->with('mensajeeliminado',' El vehículo ha sido eliminado con éxito.');

    }
}
