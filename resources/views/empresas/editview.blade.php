@extends('layouts.editview')

@section('title', 'Editar Empresa')
@section('title_name', $empresa->razon_social)

@section('editform')

    {!! Form::open(['route' => ['empresas.update', $empresa->id], 'method' => 'PUT']) !!}
    <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
    <a class="btn btn-danger" href="{{ route('empresas.show', $empresa->id) }}">Cancelar</a><br><br>

@endsection

@section('editview')

    <?php
    $array = [];
    $ciudades = \DB::table('tb_ciudades')->select('id', 'CiudadNombre')->get();
    foreach ($ciudades as $row)
    {
        $array[$row->id] = $row->CiudadNombre;
    }
    ?>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('nit', 'Nit', ['style' => 'color:#585858']) !!}
    {!! Form::text('nit', $empresa->nit, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('razon_social', 'Razon Social', ['style' => 'color:#585858']) !!}
    {!! Form::text('razon_social', $empresa->razon_social, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('nombre_negocio', 'Nombre Empresa', ['style' => 'color:#585858']) !!}
    {!! Form::text('nombre_negocio', $empresa->nombre_negocio, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('telefono', 'Telefono', ['style' => 'color:#585858']) !!}
    {!! Form::text('telefono', $empresa->telefono, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>


    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('direccion', 'Direccion', ['style' => 'color:#585858']) !!}
    {!! Form::text('direccion', $empresa->direccion, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
    {!! Form::label('ciudad_id', 'Ciudad', ['style' => 'color:#585858']) !!}
    {!! Form::select('ciudad_id', $array, $empresa->ciudad_id, ['class' => 'form-control' , 'required'])!!}
    </div>

@endsection