<?php

namespace myApp\Http\Controllers;

use Illuminate\Http\Request;
use myApp\Pais;
use Flash;

class PaisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = Pais::orderBy('PaisNombre','ASC')->paginate(8);
        return view('paises.index')->with('paises', $paises);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pais = new Pais($request->all());
        $pais->save();
        return redirect()->route('paises.show', $pais->PaisCodigo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($PaisCodigo)
    {
        $pais = Pais::find($PaisCodigo);
        return view('paises.detailview')->with('pais', $pais);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($PaisCodigo)
    {
        $pais = Pais::find($PaisCodigo);
        return view('paises.editview')->with('pais', $pais);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $PaisCodigo)
    {
        $pais = Pais::find($PaisCodigo);
        $pais->PaisCodigo = $request->PaisCodigo;
        $pais->PaisNombre = $request->PaisNombre;
        $pais->save();
        return redirect()->route('paises.show', $pais->PaisCodigo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($PaisCodigo)
    {
        $pais = Pais::find($PaisCodigo);
        $pais->delete();
        return redirect()->route('paises.index');
    }
}
