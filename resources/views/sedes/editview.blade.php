@extends('layouts.editview')

@section('title', 'Editar Sede')
@section('title_name', $sede->nombre)

@section('editform')

    {!! Form::open(['route' => ['sedes.update', $sede->id], 'method' => 'PUT']) !!}
    <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
    <a class="btn btn-danger" href="{{ route('sedes.show', $sede->id) }}">Cancelar</a><br><br>

@endsection

@section('editview')

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
    {!! Form::text('nombre', $sede->nombre, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('ciudad_id', 'Ciudad', ['style' => 'color:#585858']) !!}
    {!! Form::select('ciudad_id', $array_ciudades, $sede->ciudad_id, ['class' => 'form-control' , 'required'])!!}
    </div>

@endsection