<?php

namespace myApp\Http\Controllers;

use Illuminate\Http\Request;
use myApp\Arbitro;

class ArbitrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arbitros = Arbitro::orderBy('nombres','ASC')->paginate(8);
        return view('arbitros.index')->with('arbitros', $arbitros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('arbitros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arbitro = new Arbitro($request->all());
        $arbitro->save();
        return redirect()->route('arbitros.show', $arbitro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arbitro = Arbitro::find($id);
        return view('arbitros.detailview')->with('arbitro', $arbitro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arbitro = Arbitro::find($id);
        return view('arbitros.editview')->with('arbitro', $arbitro);
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
        $arbitro = Arbitro::find($id);
        $arbitro->identificacion = $request->identificacion;
        $arbitro->nombres = $request->nombres;
        $arbitro->apellidos = $request->apellidos;
        $arbitro->save();
        return redirect()->route('arbitros.show', $arbitro->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arbitro = Arbitro::find($id);
        $arbitro->delete();
        return redirect()->route('arbitros.index');
    }
}
