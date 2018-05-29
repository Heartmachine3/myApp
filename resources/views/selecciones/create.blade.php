@extends('layouts.createview')

    @section('title', 'Crear Seleccion')

    @section('createform')

        {!! Form::open(['route' => 'selecciones.store', 'method' => 'POST'] ) !!}
        <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
        <a class="btn btn-primary" href="">Cancelar</a><br><br>

    @endsection

    @section('createview')

    <?php
        $array_sede = [];
        $sedes = \DB::table('tb_sedes')->select('id', 'nombre')->get();
        foreach ($sedes as $row)
        {
            $array_sede[$row->id] = $row->nombre;
        }
    ?>

    <?php
        $array_pais = [];
        $paises = \DB::table('tb_paises')->select('PaisCodigo', 'PaisNombre')->get();
        foreach ($paises as $row)
        {
            $array_pais[$row->PaisCodigo] = $row->PaisNombre;
        }
    ?>

    <?php
        $array_dt = [];
        $dts = \DB::table('tb_directores_tecnicos')->select('id', 'nombres')->get();
        foreach ($dts as $row)
        {
            $array_dt[$row->id] = $row->nombres;
        }
    ?>
        
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombre', 'Nombre', ['style' => 'color:#585858']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('sede_id', 'Sede', ['style' => 'color:#585858']) !!}
        {!! Form::select('sede_id', $array_sede, null, ['class' => 'form-control' , 'required'])!!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('PaisCodigo', 'Pais', ['style' => 'color:#585858']) !!}
        {!! Form::select('PaisCodigo', $array_pais, null, ['class' => 'form-control' , 'required'])!!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('director_tecnico_id', 'Director Tecnico', ['style' => 'color:#585858']) !!}
        {!! Form::select('director_tecnico_id', $array_dt, null, ['class' => 'form-control' , 'required'])!!}
    </div>

    @endsection