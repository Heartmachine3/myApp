@extends('layouts.editview')

@section('title', 'Editar Sucursal')
@section('title_name', $sucursal->nombre)

@section('editform')

    {!! Form::open(['route' => ['sucursales.update', $sucursal->id], 'method' => 'PUT']) !!}
    <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
    <a class="btn btn-danger" href="{{ route('sucursales.show', $sucursal->id) }}">Cancelar</a><br><br>

@endsection

@section('editview')

    <?php
    $array_ciudad = [];
    $ciudades = \DB::table('tb_ciudades')->select('id', 'CiudadNombre')->get();
    foreach ($ciudades as $row)
    {
        $array_ciudad[$row->id] = $row->CiudadNombre;
    }

    $array_empresa = [];
    $empresas = \DB::table('tb_empresas')->select('id', 'razon_social')->get();
    foreach ($empresas as $row)
    {
        $array_empresa[$row->id] = $row->razon_social;
    }
    ?>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('nombre', 'Nombre Sucursal', ['style' => 'color:#585858']) !!}
    {!! Form::text('nombre', $sucursal->nombre, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('empresa_id', 'Empresa', ['style' => 'color:#585858']) !!}
    {!! Form::select('empresa_id', $array_empresa, $sucursal->empresa_id, ['class' => 'form-control' , 'required'])!!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('ciudad_id', 'Ciudad', ['style' => 'color:#585858']) !!}
    {!! Form::select('ciudad_id', $array_ciudad, $sucursal->ciudad_id, ['class' => 'form-control' , 'required'])!!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('telefono', 'Telefono', ['style' => 'color:#585858']) !!}
    {!! Form::text('telefono', $sucursal->telefono, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('direccion', 'Direccion', ['style' => 'color:#585858']) !!}
    {!! Form::text('direccion', $sucursal->direccion, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

@endsection