<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['propietarios']=Propietario::all();
        $vehiculos['vehiculos']= Vehiculo::all();
        return view('propietarios.index',$datos,$vehiculos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $vehiculos['vehiculos']= Vehiculo::all();           
        return view('propietarios.create',$vehiculos);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosPropietario = request()->except('_token');
        Propietario::insert($datosPropietario);
        return redirect('propietario')->with('mensaje','Propietario agregado con éxito!. ');
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
        $vehiculos['vehiculos']= Vehiculo::all();
        $propietario = Propietario::findOrFail($id);
        return view('propietarios.edit', compact('propietario'),$vehiculos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datosPropietario = request()->except(['_token','_method']);
        Propietario::where('idPropietario','=',$id) -> update($datosPropietario);
        
        return redirect('propietario')->with('mensaje','Propietario actualizado con éxito!.');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Propietario::destroy($id);

        return redirect('propietario')->with('mensajeeliminado',' Propietario eliminado con éxito!. ');
    }
}
