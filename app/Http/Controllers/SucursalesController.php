<?php

namespace myApp\Http\Controllers;

use Illuminate\Http\Request;
use myApp\Sucursal;

class SucursalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursales = Sucursal::orderBy('nombre','ASC')->paginate(8);
        return view('sucursales.index')->with('sucursales', $sucursales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sucursales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sucursal = new Sucursal($request->all());
        $sucursal->save();
        return redirect()->route('sucursales.show', $sucursal->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sucursal = Sucursal::find($id);
        return view('sucursales.detailview')->with('sucursal', $sucursal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sucursal = Sucursal::find($id);
        return view('sucursales.editview')->with('sucursal', $sucursal);
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
        $sucursal = Sucursal::find($id);
        $sucursal->nombre = $request->nombre;
        $sucursal->empresa_id = $request->empresa_id;
        $sucursal->ciudad_id = $request->ciudad_id;
        $sucursal->telefono = $request->telefono;
        $sucursal->direccion = $request->direccion;
        $sucursal->save();
        return redirect()->route('sucursales.show', $sucursal->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sucursal = Sucursal::find($id);
        $sucursal->delete();
        return redirect()->route('sucursales.index');
    }
}
