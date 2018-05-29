@extends('layouts.createview')

    @section('title', 'Crear Empresa')

    @section('createform')

        {!! Form::open(['route' => 'empresas.store', 'method' => 'POST'] ) !!}
        <button type="submit" class="btn btn-primary"> {{ __('Guardar') }} </button>
        <a class="btn btn-primary" href="">Cancelar</a><br><br>

    @endsection

    @section('createview')

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
        {!! Form::text('nit', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('razon_social', 'Razon Social', ['style' => 'color:#585858']) !!}
        {!! Form::text('razon_social', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('nombre_negocio', 'Nombre Empresa', ['style' => 'color:#585858']) !!}
        {!! Form::text('nombre_negocio', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('telefono', 'Telefono', ['style' => 'color:#585858']) !!}
        {!! Form::text('telefono', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('direccion', 'Direccion', ['style' => 'color:#585858']) !!}
        {!! Form::text('direccion', null, ['class' => 'form-control', 'required', 'placeholder' => 'Digite Información'], 'required') !!}
    </div>

    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('ciudad_id', 'Ciudad', ['style' => 'color:#585858']) !!}
        {!! Form::select('ciudad_id', $array, null, ['class' => 'form-control' , 'required'])!!}
    </div>

    @endsection