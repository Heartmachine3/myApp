<?php

namespace myApp\Http\Controllers;

use Illuminate\Http\Request;
use myApp\Ciudad;

class CiudadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades = Ciudad::orderBy('id','ASC')->paginate(8);
        return view('ciudades.index')->with('ciudades', $ciudades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ciudades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ciudad = new Ciudad($request->all());
        $ciudad->PaisCodigo = $request->PaisCodigo;
        $ciudad->save();
        return redirect()->route('ciudades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ciudad = Ciudad::find($id);
        return view('ciudades.detailview')->with('ciudad', $ciudad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ciudad = Ciudad::find($id);
        return view('ciudades.editview')->with('ciudad', $ciudad);
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
        $ciudad = Ciudad::find($id);
        $ciudad->CiudadNombre = $request->CiudadNombre;
        $ciudad->PaisCodigo = $request->PaisCodigo;
        $ciudad->save();
        return redirect()->route('ciudades.show', $ciudad->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->delete();
        return redirect()->route('ciudades.index');
    }
}
