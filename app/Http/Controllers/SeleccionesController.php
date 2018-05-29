<?php

namespace myApp\Http\Controllers;

use Illuminate\Http\Request;
use myApp\Seleccion;

class SeleccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selecciones = Seleccion::orderBy('nombre','ASC')->paginate(8);
        return view('selecciones.index')->with('selecciones', $selecciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('selecciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seleccion = new Seleccion($request->all());
        $seleccion->save();
        return redirect()->route('selecciones.show', $seleccion->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seleccion = Seleccion::find($id);
        return view('selecciones.detailview')->with('seleccion', $seleccion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seleccion = Seleccion::find($id);
        return view('selecciones.editview')->with('seleccion', $seleccion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $seleccion = Seleccion::find($id);
        $seleccion->nombre = $request->nombre;
        $seleccion->sede_id = $request->sede_id;
        $seleccion->PaisCodigo = $request->PaisCodigo;
        $seleccion->director_tecnico_id = $request->director_tecnico_id;
        $seleccion->save();
        return redirect()->route('selecciones.show', $seleccion->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seleccion = Seleccion::find($id);
        $seleccion->delete();
        return redirect()->route('selecciones.index');
    }
}
