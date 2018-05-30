<?php

namespace myApp\Http\Controllers;

use Illuminate\Http\Request;
use myApp\Sede;

class SedesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $sedes = Sede::orderBy('nombre','ASC')->paginate(7);

        $sedes = Sede::where(function($query) use ($request){
            if ($term = $request->get('term')){
                $query->where('nombre', 'like' , '%' . $term . '%' );
            }
        })->orderBy('nombre','ASC')->paginate(7);

        return view('sedes.index')->with('sedes', $sedes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sedes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sede = new Sede($request->all());
        $sede->save();
        return redirect()->route('sedes.show', $sede->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sede = Sede::find($id);
        return view('sedes.detailview')->with('sede', $sede);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sede = Sede::find($id);
        return view('sedes.editview')->with('sede', $sede);
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
        $sede = Sede::find($id);
        $sede->nombre = $request->nombre;
        $sede->ciudad_id = $request->ciudad_id;
        $sede->save();
        return redirect()->route('sedes.show', $sede->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sede = Sede::find($id);
        $sede->delete();
        return redirect()->route('sedes.index');
    }
}
