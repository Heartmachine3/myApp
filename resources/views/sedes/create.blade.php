@extends('layouts.createview')

    @section('title', 'Crear Sede')

    @section('createform')

        {!! Form::open(['route' => 'sedes.store', 'method' => 'POST'] ) !!}
        <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
        <a class="btn btn-primary" href="">Cancelar</a><br><br>

    @endsection

    @section('createview')

    <?php
        $array_ciudades = [];
        $ciudades = \DB::table('tb_ciudades')->select('id', 'CiudadNombre')->get();
        foreach ($ciudades as $row)
        {
            $array_ciudades[$row->id] = $row->CiudadNombre;
        }
    ?>
        
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombre', 'Nombre Sede', ['style' => 'color:#585858']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('ciudad_id', 'Ciudad', ['style' => 'color:#585858']) !!}
        {!! Form::select('ciudad_id', $array_ciudades, null, ['class' => 'form-control' , 'required'])!!}
    </div>

    @endsection