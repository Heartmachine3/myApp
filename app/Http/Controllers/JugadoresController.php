<?php

namespace myApp\Http\Controllers;

use Illuminate\Http\Request;
use Flash;
use myApp\Jugador;
use Alert;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = Jugador::orderBy('id','ASC')->paginate(8);
        return view('jugadores.index')->with('jugadores', $jugadores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jugadores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jugador = new Jugador($request->all());
        $jugador->save();

        return redirect()->route('jugadores.index');
        // Jugador::create([
        //     'nombres' => $request('nombres'),
        //     'appelidos' => $request('apellidos'),
        //     'equipo' => $request('equipo'),
        // ]);


        // $array = [];
        // $paises = \DB::table('tb_paises')->select('PaisCodigo', 'PaisNombre')->get();
        // foreach ($paises as $row)
        // {
        //     $array[$row->PaisCodigo] = $row->PaisNombre;
        //     // array_push($array, $row->PaisCodigo);
        // }
        // print_r($array);
        // // dd($paises);
        // // $jugadores = new Jugadores($request -> all());
        // // dd($jugadores);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $jugador = Jugador::find($id);
        return view('jugadores.detailview')->with('jugador', $jugador);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jugador = Jugador::find($id);
        return view('jugadores.editview')->with('jugador', $jugador);;
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
        $jugador = Jugador::find($id);
        $jugador->nombres = $request->nombres;
        $jugador->apellidos = $request->apellidos;
        $jugador->apellidos = $request->apellidos;
        $jugador->save();

        return redirect()->route('jugadores.show', $jugador->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jugador = Jugador::find($id);
        $jugador->delete();
        return redirect()->route('jugadores.index');
    }
}
